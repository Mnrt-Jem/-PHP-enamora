<?php
/**
* 2019 Anvanto
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
*  @copyright  2019 anvanto.com

*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
    exit;
}
//
class an_theme_dashboard extends Module
{
    const PREFIX = "an_td_";
	
    public function __construct()
    {
        $this->name = 'an_theme_dashboard';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'anvanto';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;
        $this->module_key = '';

        parent::__construct();

        $this->displayName = $this->l('Anvanto Theme Dashboard');
        $this->description = $this->l('Anvanto Theme Dashboard');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install()
    {
		//////
		$languages = Language::getLanguages();
		
        $new_tab = new Tab();
        $new_tab->class_name = 'AdminAn_theme_dashboard';
        $new_tab->id_parent = Tab::getIdFromClassName('IMPROVE');
        $new_tab->module = $this->name;
        $new_tab->active = 1;
		$new_tab->icon = 'dashboard';
        foreach ($languages as $language) {
            $new_tab->name[$language['id_lang']] = 'AN Theme Dashboard';
        }
        $new_tab->add();
		///	
		
        if (parent::install()) {
            return $this->registerHook('backOfficeHeader');
        }

        return false;
    }

    public function uninstall()
    {
        $idTab = Tab::getIdFromClassName('AdminAn_theme_dashboard');
        $deletion_tab = true;

        if ($idTab) {
            $tab = new Tab($idTab);
            $deletion_tab = $tab->delete();
        }

        return parent::uninstall();
    }
	
    public function hookBackOfficeHeader($params)
    {
        if (Tools::getValue('controller') == 'AdminAn_theme_dashboard') {
			$this->context->controller->addJquery();
			$this->context->controller->addJS($this->_path.'views/js/jquery.magnific-popup.min.js');
			$this->context->controller->addJS($this->_path.'views/js/back.js');
			$this->context->controller->addCSS($this->_path.'views/css/back.css');
		}
    }
}
