<?php
/**
 * 2020 Anvanto
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author Anvanto (anvantoco@gmail.com)
 *  @copyright  2020 anvanto.com

 *  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

require_once _PS_MODULE_DIR_.'anblog/loader.php';
require_once _PS_MODULE_DIR_.'anblog/ReCaptcha/ReCaptcha/ReCaptcha.php';
require_once _PS_MODULE_DIR_.'anblog/ReCaptcha/ReCaptcha/Response.php';

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;

class AnblogblogModuleFrontController extends ModuleFrontController
{
    public $php_self;
    protected $template_path = '';

    public function __construct()
    {
        parent::__construct();
        $this->context = Context::getContext();
        $this->template_path = _PS_MODULE_DIR_.'anblog/views/templates/front/';
        $code = '';

        $this->translations = Module::getInstanceByName('anblog')->translateFrontBlog();
        if (sizeof(Language::getLanguages(true, true)) > 1) {
            $code =$this->context->language->iso_code .  '/';
        }
        $this->context->smarty->assign(
            'anblog_main_page',
            $this->context->shop->getBaseURL(true) . $code . Configuration::get('link_rewrite', 'blog') . '.html'
        );
    }


    /**
     * @param object &$object Object
     * @param string $table   Object table
     *                        @ DONE
     */
    protected function copyFromPost(&$object, $table, $post = array())
    {
        /* Classical fields */
        foreach ($post as $key => $value) {
            if (key_exists($key, $object) && $key != 'id_'.$table) {
                /* Do not take care of password field if empty */
                if ($key == 'passwd' && Tools::getValue('id_'.$table) && empty($value)) {
                    continue;
                }
                if ($key == 'passwd' && !empty($value)) {
                    /* Automatically encrypt password in MD5 */
                    $value = Tools::encrypt($value);
                }
                $object->{$key} = $value;
            }
        }

        /* Multilingual fields */
        $rules = call_user_func(array(get_class($object), 'getValidationRules'), get_class($object));
        if (count($rules['validateLang'])) {
            $languages = Language::getLanguages(false);
            foreach ($languages as $language) {
                foreach (array_keys($rules['validateLang']) as $field) {
                    $field_name = $field.'_'.(int)($language['id_lang']);
                    $value = Tools::getValue($field_name);
                    if (isset($value)) {
                        // validate module
                        $object->{$field}[(int)($language['id_lang'])] = $value;
                    }
                }
            }
        }
    }

    /**
     * Save user comment
     */
    protected function comment()
    {
        $post = array();
        $post['user'] = Tools::getValue('user');
        $post['email'] = Tools::getValue('email');
        $post['comment'] = Tools::getValue('comment');
        $post['captcha'] = Tools::getValue('g-recaptcha-response', true);
        $post['id_anblog_blog'] = Tools::getValue('id_anblog_blog');
        $post['submitcomment'] = Tools::getValue('submitcomment');
        if (!empty($post)) {
            $comment = new AnblogComment();
            $config = new AnblogConfig();
            $result = true;
            $error = new stdClass();
            $error->error = true;
            if (AnblogConfig::getInstance()->params['google_captcha_status']) {
                $recaptcha = new ReReCaptcha($config->get('google_captcha_secret_key'));
                $response = $recaptcha->verify(Tools::getValue('g-recaptcha-response'));
                $result = $response->isSuccess();
            }
            $this->copyFromPost($comment, 'comment', $post);
            if ($result) {
                if ($comment->validateFields(false) && $comment->validateFieldsLang(false)) {
                    $comment->save();
                    $error->message = $this->translations['thanks'];
                    $error->error = false;
                } else {
                    // validate module
                    $error->message = $this->translations['error'];
                }
            } else {
                // validate module
                $error->message = $this->translations['recapcha'];
            }

            die(Tools::jsonEncode($error));
        }
    }

    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {

        $this->php_self = 'blog';


        $config = AnblogConfig::getInstance();

        /* Load Css and JS File */
        AnblogHelper::loadMedia($this->context, $this);

        parent::initContent();

        if (Tools::isSubmit('submitcomment')) {
            // validate module
            $this->comment();
        }

        $helper = AnblogHelper::getInstance();
        if (Configuration::get('PS_REWRITING_SETTINGS')) {
            // URL HAVE ID
            $blog = new AnblogBlog(Tools::getValue('id'), $this->context->language->id);
        } else {
            // REMOVE ID FROM URL
            $url_rewrite = explode('/', $_SERVER['REQUEST_URI']);
            $url_last_item = count($url_rewrite) - 1;
            $url_rewrite = rtrim($url_rewrite[$url_last_item], 'html');
            $url_rewrite = rtrim($url_rewrite, '\.');    // result : product.html -> product.
            $blog = AnblogBlog::findByRewrite(array('link_rewrite'=>Tools::getValue('rewrite')));
        }

        if (!$blog->id_anblog_blog) {
            $this->context->smarty->assign(
                array(
                    'getBlogLink'    => true,
                    'blogLink'       => $helper->getFontBlogLink(),
                    'blogTitle'      => htmlentities($config->get('blog_link_title_'.$this->context->language->id, 'Blog'), ENT_NOQUOTES, 'UTF-8'),
                    'navigationPipe' => Configuration::get('PS_NAVIGATION_PIPE')
                )
            );
            $vars = array(
                'error' => true,
            );
            $this->context->smarty->assign($vars);

            $this->context->smarty->assign(
                array(
                    'post_type' => Tools::getIsset('post_type') ? Tools::getValue('post_type') : AnblogConfig::getInstance()->get('item_posts_type'),
                    'show_in_post' => Tools::getIsset('show_in_post') ? Tools::getValue('show_in_post') : AnblogConfig::getInstance()->get('show_in_post'),
                    'show_in_blog' => Tools::getIsset('show_in_blog') ? Tools::getValue('show_in_blog') : AnblogConfig::getInstance()->get('show_in_blog'),
                )
            );
            return $this->setTemplate('module:anblog/views/templates/front/single_post.tpl');
        }

        $category = new anblogcat($blog->categories[0], $this->context->language->id);
        if ($category->groups != null
            && $category->groups != ''
            && !in_array(Group::getCurrent()->id, explode(';', $category->groups))
        ) {
            Tools::redirect('index.php?controller=404');
        }
        $this->template_path .= 'default/';
        $module_tpl = $this->template_path;

        $blog->preview_url = '';
        if ($blog->image) {
            $blog->image_url = $blog->imageObject->mainurl;

            if (array_key_exists('anblog_thumb', $blog->imageObject->thumbsurls)) {
                $blog->preview_url = $blog->imageObject->thumbsurls['anblog_thumb'];
                $blog->thumb_url = $blog->imageObject->thumbsurls['anblog_thumb'];
            }
        }

        $blog_link = $helper->getBlogLink(get_object_vars($blog));
        $params = array(
            'rewrite' => $category->link_rewrite,
            'id' => $category->id_anblogcat
        );

        $blog->category_link = $helper->getBlogCatLink($params);
        $blog->category_title = $category->title;

        //DONGND:: author name
        if ($blog->author_name != '') {
            $blog->author = $blog->author_name;
            $blog->author_link = $helper->getBlogAuthorLink($blog->author_name);
        } else {
            $employee = new Employee($blog->id_employee);
            $blog->author = $employee->firstname.' '.$employee->lastname;
            $blog->author_link = $helper->getBlogAuthorLink($employee->id);
        }

        $tags = array();
        if ($blog->tags && $tmp = explode(',', $blog->tags)) {
            foreach ($tmp as $tag) {
                $tags[] = array(
                    'tag' => $tag,
                    'link' => $helper->getBlogTagLink($tag)
                );
            }
        }

        $blog->hits = $blog->hits + 1;
        $blog->updateField($blog->id, array('hits' => $blog->hits));

        /* breadscrumb */
        $params = array(
            'rewrite' => $category->link_rewrite,
            'id' => $category->id_anblogcat
        );

        $category->category_link = $helper->getBlogCatLink($params);
        $this->context->smarty->assign(
            array(
                'getBlogLink'    => false,
                'categories'     => array($category),
                'blogLink'       => $helper->getFontBlogLink(),
                'blogTitle'      => htmlentities($config->get('blog_link_title_'.$this->context->language->id, 'Blog'), ENT_NOQUOTES, 'UTF-8'),
                'navigationPipe' => Configuration::get('PS_NAVIGATION_PIPE')
            )
        );
        $limit = 5;

        $samecats = AnblogBlog::getListBlogs(
            $category->id_anblogcat,
            $this->context->language->id,
            0,
            $limit,
            'date_add',
            'DESC',
            array('type' => 'samecat', 'id_anblog_blog' => $blog->id_anblog_blog),
            true
        );
        foreach ($samecats as $key => $sblog) {
            $sblog['link'] = $helper->getBlogLink($sblog);
            $samecats[$key] = $sblog;
        }

        $tagrelated = array();

        if ($blog->tags) {
            $tagrelated = AnblogBlog::getListBlogs(
                $category->id_anblogcat,
                $this->context->language->id,
                0,
                $limit,
                'date_add',
                'DESC',
                array('type' => 'tag', 'tag' => $blog->tags),
                true
            );
            foreach ($tagrelated as $key => $tblog) {
                $tblog['link'] = $helper->getBlogLink($tblog);
                $tagrelated[$key] = $tblog;
            }
        }

        /* Comments */
        $evars = array();
        if ($config->get('item_comment_engine', 'local') == 'local') {
            $count_comment = 0;
            if ($config->get('comment_engine', 'local') == 'local') {
                // validate module
                $count_comment = AnblogComment::countComments($blog->id_anblog_blog, true);
            }

            $blog_link = $helper->getBlogLink(get_object_vars($blog));
            $limit = (int)$config->get('item_limit_comments', 10);
            $n = $limit;
            $p = abs((int)(Tools::getValue('p', 1)));

            $comment = new AnblogComment();
            $comments = $comment->getList($blog->id_anblog_blog, $this->context->language->id, $p, $limit);

            $nb_blogs = $count_comment;
            $range = 2; /* how many pages around page selected */
            if ($p > (($nb_blogs / $n) + 1)) {
                Tools::redirect(preg_replace('/[&?]p=\d+/', '', $_SERVER['REQUEST_URI']));
            }
            $pages_nb = ceil($nb_blogs / (int)($n));
            $start = (int)($p - $range);
            if ($start < 1) {
                $start = 1;
            }
            $stop = (int)($p + $range);
            if ($stop > $pages_nb) {
                $stop = (int)($pages_nb);
            }

            $evars = array('pages_nb' => $pages_nb,
                'nb_items' => $count_comment,
                'p' => (int)$p,
                'n' => (int)$n,
                'requestPage' => $blog_link,
                'requestNb' => $blog_link,
                'start' => $start,
                'comments' => $comments,
                'range' => $range,
                'blog_count_comment' => $count_comment,
                'stop' => $stop);
        }
        if ((bool)Module::isEnabled('smartshortcode')
            && context::getcontext()->controller->controller_type == 'front'
        ) {
            $smartshortcode = Module::getInstanceByName('smartshortcode');
            $blog->content = $smartshortcode->parse($blog->content);
        }

        if (!empty($blog->products) && count($blog->products) > 0) {
            $products = AnblogBlog::getProductsByArrayId($blog->products, (int)$this->context->language->id);
            if ($products) {
                $present_products = array();
                $assembler = new ProductAssembler($this->context);

                $presenterFactory = new ProductPresenterFactory($this->context);
                $presentationSettings = $presenterFactory->getPresentationSettings();
                $presenter = new ProductListingPresenter(
                    new ImageRetriever($this->context->link),
                    $this->context->link,
                    new PriceFormatter(),
                    new ProductColorsRetriever(),
                    $this->context->getTranslator()
                );

                foreach ($products as $rawProduct) {
                    $present_products[] = $presenter->present(
                        $presentationSettings,
                        $assembler->assembleProduct($rawProduct),
                        $this->context->language
                    );
                }

                $blog->products = $present_products;
            }
        }

        $vars = array(
            'tags' => $tags,
            'meta_title' => Tools::ucfirst($blog->meta_title).' - '.Configuration::get('PS_SHOP_NAME'),
            'meta_keywords' => $blog->meta_keywords,
            'meta_description' => $blog->meta_description,
            'blog' => $blog,
            'samecats' => $samecats,
            'tagrelated' => $tagrelated,
            'config' => $config,
            'id_anblog_blog' => $blog->id_anblog_blog,
            'is_active' => $blog->active,
            'productrelated' => array(),
            'module_tpl' => $module_tpl,
            'blog_link' => $blog_link,
        );

        $vars = array_merge($vars, $evars);

        $this->context->smarty->assign($vars);

        $this->context->smarty->assign(
            array(
                'post_type' => Tools::getIsset('post_type') ? Tools::getValue('post_type') : AnblogConfig::getInstance()->get('item_posts_type'),
                'show_in_post' => Tools::getIsset('show_in_post') ? Tools::getValue('show_in_post') : AnblogConfig::getInstance()->get('show_in_post'),
                'show_in_blog' => Tools::getIsset('show_in_blog') ? Tools::getValue('show_in_blog') : AnblogConfig::getInstance()->get('show_in_blog'),
            )
        );
        $this->setTemplate('module:anblog/views/templates/front/single_post.tpl');
    }

    // DONGND:: add meta
    public function getTemplateVarPage()
    {
        $page = parent::getTemplateVarPage();
        if (Configuration::get('PS_REWRITING_SETTINGS')) {
            $blog = new AnblogBlog(Tools::getValue('id'), $this->context->language->id);
        } else {
            // REMOVE ID FROM URL
            $url_rewrite = explode('/', $_SERVER['REQUEST_URI']);
            $url_last_item = count($url_rewrite) - 1;
            $url_rewrite = rtrim($url_rewrite[$url_last_item], 'html');
            $url_rewrite = rtrim($url_rewrite, '\.');    // result : product.html -> product.
            $blog = AnblogBlog::findByRewrite(array('link_rewrite'=>Tools::getValue('rewrite')));
        }
        $page['meta']['title'] = Tools::ucfirst($blog->meta_title).' - '.Configuration::get('PS_SHOP_NAME');
        $page['meta']['keywords'] = $blog->meta_keywords;
        $page['meta']['description'] = $blog->meta_description;
        return $page;
    }

    //DONGND:: add breadcrumb
    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();
        $helper = AnblogHelper::getInstance();
        $link = $helper->getFontBlogLink();
        $config = AnblogConfig::getInstance();
        $breadcrumb['links'][] = array(
            'title' => $config->get(
                'blog_link_title_'.$this->context->language->id,
                $this->translations['blog']
            ),
            'url' => $link,
        );

        $blog = new AnblogBlog(Tools::getValue('id'), $this->context->language->id);

        $category = new anblogcat($blog->categories[0], $this->context->language->id);
        $params = array(
            'rewrite' => $category->link_rewrite,
            'id' => $category->id_anblogcat
        );

        $category_link = $helper->getBlogCatLink($params);

        $breadcrumb['links'][] = array(
            'title' => $category->title,
            'url' => $category_link,
        );

        $breadcrumb['links'][] = array(
            'title' => Tools::ucfirst($blog->meta_title),
            'url' => $helper->getBlogLink(get_object_vars($blog)),
        );

        return $breadcrumb;
    }

    //DONGND:: get layout
    public function getLayout()
    {
        $entity = 'module-anblog-'.$this->php_self;

        $layout = $this->context->shop->theme->getLayoutRelativePathForPage($entity);

        if ($overridden_layout = Hook::exec(
            'overrideLayoutTemplate',
            array(
                    'default_layout' => $layout,
                    'entity' => $entity,
                    'locale' => $this->context->language->locale,
                    'controller' => $this,
                )
        )
        ) {
            return $overridden_layout;
        }

        if ((int) Tools::getValue('content_only')) {
            $layout = 'layouts/layout-content-only.tpl';
        }

        return $layout;
    }
}
