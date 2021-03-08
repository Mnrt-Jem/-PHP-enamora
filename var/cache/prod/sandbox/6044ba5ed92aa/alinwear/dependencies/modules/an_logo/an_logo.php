<?php
/**
 * 2007-2019 PrestaShop
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
 * @author    Anvanto <anvantoco@gmail.com>
 * @copyright 2007-2019 Anvanto
 * @license   http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class an_logo extends Module implements WidgetInterface
{
    const PREFIX = 'an_logo_';

    public function __construct()
    {
        $this->name = 'an_logo';
        $this->tab = 'others';
        $this->version = '1.0.1';
        $this->author = 'Anvanto';
        $this->need_instance = 1;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;
        $this->module_key = '';

        parent::__construct();

        $this->displayName = $this->l('AN Logo');
        $this->description = $this->l('');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall the module?');
    }

    /**
     * @return bool
     */
    public function install()
    {
        if (!parent::install() || !$this->registerHook('displayLogo')) {
            return false;
        }
        Configuration::updateValue('an_logo_view_type', 'logo');
        return true;
    }

    /**
     * @return bool
     */
    public function uninstall()
    {
        Configuration::updateValue('an_logo_view_type', '');
        Configuration::updateValue('an_logo_img', '');
        return parent::uninstall();
    }

    /**
     * @return string
     */
    public function getContent()
    {
        if (((bool)Tools::isSubmit('submit_an_logo')) == true) {
            $this->postProcess();
        }

        return $this->renderForm();
    }

    /**
     * @return string
     */
    protected function renderForm()
    {
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?
            Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submit_an_logo';
        $helper->currentIndex = $this->context->link->getAdminLink(
            'AdminModules',
            false
        ) . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'uri' => $this->getPathUri(),
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * @return array
     */
    public function getConfigFieldsValues()
    {
        $fields = array();
        $fields['an_logo_img'] = Configuration::get('an_logo_img');
        $fields['an_logo_view_type'] = Configuration::get('an_logo_view_type');
        return $fields;
    }


    /**
     * @return array
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'radio',
                        'label' => $this->l('View type'),
                        'name' => 'an_logo_view_type',
                        'default_value' => 0,
                        'values' => array(
                            array(
                                'id' => 'logo',
                                'value' => 'logo',
                                'label' => $this->l('Logo')),
                            array(
                                'id' => 'svg',
                                'value' => 'svg',
                                'label' => $this->l('svg')),
                        ),
                    ),
                    array(
                        'type' => 'file_image',
                        'label' => $this->l('Image'),
                        'required' => false,
                        'name' => 'an_logo_img',
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }


    /**
     * @return string
     */
    protected function postProcess()
    {
        if (Tools::getValue('filename') == 'delete') {
            @unlink(dirname(__FILE__)
                . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR
                . Configuration::get('an_logo_img'));
            Configuration::updateValue('an_logo_img', '');
        } elseif (Tools::isSubmit('submit_an_logo')) {
            $values = array();
            $update_images_values = false;

            if (isset($_FILES['an_logo_img'])
                && isset($_FILES['an_logo_img']['tmp_name'])
                && !empty($_FILES['an_logo_img']['tmp_name'])) {
                $ext = Tools::substr($_FILES['an_logo_img']['name'], strrpos($_FILES['an_logo_img']['name'], '.') + 1);
                $file_name = md5($_FILES['an_logo_img']['name']) . '.' . $ext;

                if (!move_uploaded_file(
                    $_FILES['an_logo_img']['tmp_name'],
                    dirname(__FILE__) . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $file_name
                )
                ) {
                    return $this->displayError($this->l(
                        'An error occurred while attempting to upload the file.'
                    ));
                } else {
                    if (Configuration::get('an_logo_img') != $file_name) {
                        @unlink(dirname(__FILE__)
                            . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR
                            . Configuration::get('an_logo_img'));
                    }

                    $values['an_logo_img'] = $file_name;
                }

                $update_images_values = true;
            }

            if ($update_images_values) {
                Configuration::updateValue('an_logo_img', $values['an_logo_img']);
            }

            Configuration::updateValue('an_logo_view_type', Tools::getValue('an_logo_view_type'));

            $this->context->controller->confirmations[] = $this->l(
                'The settings have been updated.'
            );
        }

        return '';
    }

    /**
     * @param $hookName
     * @param array $params
     * @return mixed|void
     */
    public function renderWidget($hookName, array $params)
    {
        $this->smarty->assign($this->getWidgetVariables($hookName, $params));
        return $this->fetch('module:an_logo/views/templates/front/logo.tpl');
    }

    /**
     * @param $hookName
     * @param array $params
     * @return array
     */
    public function getWidgetVariables($hookName, array $params)
    {
        $ret = array(
            'an_logo_view_type' => Configuration::get('an_logo_view_type')
        );
        if (Configuration::get('an_logo_img')) {
            $ret['an_logo_img'] = $this->getPathUri().'img/' .
                Configuration::get('an_logo_img');
        } else {
            $ret['an_logo_img'] = false;
        }
        return $ret;
    }
}
