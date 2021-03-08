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

$blog_config = array(
    'blog_link_title_1' => 'Blog',
    'blog_link_title_3' => 'Blog',
    'link_rewrite' => 'blog',
    'category_rewrite' => 'category',
    'detail_rewrite' => 'post',
    'meta_title_1' => 'Blog',
    'meta_title_3' => 'Blog',
    'meta_description_1' => '',
    'meta_description_3' => '',
    'meta_keywords_1' => '',
    'meta_keywords_3' => '',
    'indexation' => 0,
    'rss_limit_item' => 5,
    'rss_title_item' => 'RSS FEED',
    // 'latest_limit_items' => 20,
    'saveConfiguration' => '',
    'listing_show_categoryinfo' => 1,
    'listing_limit_items' => 6,
    'listing_show_title' => 1,
    'listing_show_description' => 1,
    'listing_show_readmore' => 1,
    'listing_show_image' => 1,
    'listing_show_author' => 0,
    'listing_show_category' => 0,
    'listing_show_created' => 1,
    'listing_show_hit' => 0,
    'listing_show_counter' => 0,
    'item_show_description' => 1,
    'item_show_image' => 0,
    'item_show_author' => 0,
    'item_show_category' => 0,
    'item_show_created' => 1,
    'item_show_hit' => 0,
    'item_show_counter' => 0,
    'social_code' => '',
    'google_captcha_status' => 1,
    'google_captcha_site_key' => '',
    'google_captcha_secret_key' => '',
    'item_show_listcomment' => 1,
    'item_show_formcomment' => 1,
    'item_comment_engine' => 'local',
    'item_posts_type' => 'type1',
    'show_in_blog' => '0',
    'show_in_post' => '0',
    'show_in_DisplayHome' => '1',
    'item_limit_comments' => '10',
    'item_diquis_account' => 'demo4antheme',
    'item_facebook_appid' => '100858303516',
    'item_facebook_width' => '600',
    'limit_recent_blog' => '5',
    'limit_DisplayHome_blog' => '6',
);


AnblogConfig::updateConfigValue('cfg_global', serialize($blog_config));
