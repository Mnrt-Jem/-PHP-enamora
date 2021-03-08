<?php

class AdminAn_theme_dashboardController extends ModuleAdminController {

    public function __construct()
    {
		$this->bootstrap = true;
		
		parent::__construct();
		
		$this->modules = $this->loadConfigFileIfExists('modules');
		$this->recommended = $this->loadConfigFileIfExists('recommended');
		
		$theme = array();
		$themeFileJson = _PS_THEME_DIR_.'/config/theme.json';
		if (Tools::file_exists_no_cache($themeFileJson)) {
			$theme = (array)Tools::jsonDecode(Tools::file_get_contents($themeFileJson), 1);			
		}

		if (!isset($theme['url_contact_us']) || $theme['url_contact_us'] == ''){
			$theme['url_contact_us'] = 'https://addons.prestashop.com/contact-form.php';
			if (isset($theme['addons_id']) && $theme['addons_id'] != ''){
				$theme['url_contact_us'] = $theme['url_contact_us']. '?id_product=' .$theme['addons_id'];
			}
		}
		if (!isset($theme['url_rate']) || $theme['url_rate'] == ''){
			$theme['url_rate'] = 'https://addons.prestashop.com/en/ratings.php';
			if (isset($theme['addons_id']) && $theme['addons_id'] != ''){
				$theme['url_rate'] = $theme['url_rate'].'?id_product='.$theme['addons_id'];
			}
		}		
		
		foreach ($this->modules as $name => $item){
			if (Module::isInstalled($name)){
				//	Logo
				$this->modules[$name]['logo'] = $this->searchLogo($name);
				
				//	URL
				if (!isset($this->modules[$name]['url']) || $this->modules[$name]['url'] == ''){
					if (isset($this->modules[$name]['id']) && $this->modules[$name]['id'] != ''){
						$this->modules[$name]['url'] = 'https://addons.prestashop.com/en/product.php?id_product='.$this->modules[$name]['id'];
					}
				}

				//	Configure
				if (!isset($this->modules[$name]['configure']) || $this->modules[$name]['configure']){
					$this->modules[$name]['configure'] = $this->context->link->getAdminLink('AdminModules').'&configure='.$name;
				}
				
				$this->modules[$name]['enabled'] = Module::isEnabled($name);
			} else {
				unset($this->modules[$name]);
			}
		}

		$this->context->smarty->assign('theme', $theme);
		$this->context->smarty->assign('modules', $this->modules);
		$this->context->smarty->assign('recommended', $this->recommended);
		
	//	$this->template = 'info.tpl';

    }	
	
	public function renderList(){	
		return $this->context->smarty->fetch(_PS_MODULE_DIR_ . '/' . $this->module->name . '/views/templates/admin/info.tpl');
	}
	
	protected function searchLogo($moduleName){
        if (Tools::file_exists_no_cache(_PS_MODULE_DIR_.$moduleName.'/logo.png')) {
            return _MODULE_DIR_.$moduleName.'/logo.png';
        }
		
		return '';
	}
	
	
    protected function loadConfigFileIfExists($sourceName)
    {
        if (Tools::file_exists_no_cache(_PS_MODULE_DIR_.'an_theme_dashboard/'.$sourceName.'.php')) {
            return include(_PS_MODULE_DIR_.'an_theme_dashboard/'.$sourceName.'.php');
        }

        return array();
    }	
	
	
}
