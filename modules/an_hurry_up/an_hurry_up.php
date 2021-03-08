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

class an_hurry_up extends Module implements WidgetInterface
{
    const PREFIX = 'an_hurry_up_';

    public function __construct()
    {
        $this->name = 'an_hurry_up';
        $this->tab = 'others';
        $this->version = '1.0.0';
        $this->author = 'Anvanto';
        $this->need_instance = 1;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;
        $this->module_key = '';
		$this->module_root_path = _PS_MODULE_DIR_.$this->name;
		$this->configuration_source = $this->module_root_path.'/configuration.json';

        parent::__construct();

        $this->displayName = $this->l('AN Hurry up');
        $this->description = $this->l('');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall the module?');
    }

    /**
     * @return bool
     */
    public function install()
    {

        Configuration::updateValue(self::PREFIX.'stockProgressBarMaxValue', 1200);
		Configuration::updateValue(self::PREFIX.'stockProgressBarColor', '');

		$this->importConfiguration();
	
		if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        if (!parent::install()
			|| !$this->registerHook('displayProductAdditionalInfo')
			|| !$this->registerHook('header')
		){
            return false;
        }

        return true;
    }

    /**	
     * @return bool
     */
    public function uninstall()
    {
        return parent::uninstall();
    }
	
	
    protected function importConfiguration($configuration_source = null)
    {
        $configuration_source = $configuration_source === null ? $this->configuration_source : $configuration_source;
        $config = Tools::jsonDecode(Tools::file_get_contents($configuration_source), 1);
		
		$paramList = $this->getParamList();
		foreach ($paramList as $key => $name) {
			if (isset($config[$name])){
				$this->updateParam($name, $config[$name]);
			}
		}
		return true;
    }
	
    protected function exportConfiguration($configuration_source = null)
    {
        $configuration_source = $configuration_source === null ? $this->configuration_source : $configuration_source;

        $data = array();
		$paramList = $this->getParamList();
        foreach ($paramList as $param => $name) {
            $data[$name] = $this->getParam($name);
        }

        return @file_put_contents($configuration_source, Tools::jsonEncode($data));
    }	
	
    /**
     * @param $key
     * @param null $value
     * @param null $id_lang
     * @return bool|string
     */
    public static function getParam($key, $value = null, $id_lang = null)
    {
        return $value === null ? Configuration::get(
            self::PREFIX . $key,
            $id_lang
        ) : Configuration::updateValue(self::PREFIX . $key, $value);
    }

    public function getParamList()
    {
        return array(
            'stockProgressBarMaxValue',
			'stockProgressBarColor',
        );
    }
	
    protected function deleteParams($keys)
    {
        foreach ($keys as $key) {
            $this->deleteParam($key);
        }
    }

    protected function deleteParam($key)
    {
        return Configuration::deleteByName(self::PREFIX.$key);
    }	
	
    protected function updateParam($key, $value)
    {
        return Configuration::updateValue(self::PREFIX.$key, $value);
    }	
	
	public function getConfig(){
		$config = array();
		$paramList = $this->getParamList();
		foreach ($paramList as $key) {
			$config[$key] = $this->getParam($key);
		}
		return $config;
	}	

	
    /**
     *
     */
    public function hookHeader()
    {
		$this->context->controller->addJquery();
		
		$this->context->controller->registerStylesheet(
			"anhurryupss",
			'modules/' . $this->name . '/views/css/front.css',
			array('server' => 'local', 'priority' => 150)
		);
		
		$this->context->controller->registerJavascript(
			"anhurryupjs",
			'modules/' . $this->name . '/views/js/front.js',
			array('server' => 'local', 'priority' => 150)
		);
    }
	

    /**
     * @param $hookName
     * @param array $params
     * @return mixed|void
     */
    public function renderWidget($hookName, array $params)
    {
		$this->smarty->assign($this->getWidgetVariables($hookName, $params));
		
		return $this->fetch('module:an_hurry_up/views/templates/front/hurryup.tpl');
    }
    /**
     * @param $hookName
     * @param array $params
     * @return array
     */
    public function getWidgetVariables($hookName, array $params)
    {
		$return['config'] = $this->getConfig();
		return $return;
    }

    public function getContent()
    {		
		$output = null;

        if (Tools::isSubmit('submit'.$this->name)) {
            $output = $this->getSubmitOutput();
        }
		
        return $output.$this->displayForm();

    }

    protected function getSubmitOutput()
    {
        $params = array();
        $paramList = $this->getParamList();

        foreach ($paramList as $key) {
            $params[$key] = Tools::getValue(self::PREFIX.$key);
        } 
		
        if (!$this->isReceivedParamsValid($params)) {
            return $this->displayError($this->l('Invalid Configuration value'));
        }		
 
        foreach ($paramList as $key) {
            $this->updateParam($key, $params[$key]);
        }
		
		$this->exportConfiguration();

        return $this->displayConfirmation($this->l('Settings updated'));
    }



    public function displayForm()
    {

		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $fields_form = array();

        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Settings'),
            ),
            'input' => array(
				
               array(
                    'type' => 'number',
                    'label' => 'Stock progress bar max value',
                    'name' => self::PREFIX.'stockProgressBarMaxValue',
                    'values' => '20',
					'col' => '2',
					'min' => 1,
                ),

               array(
                    'type' => 'color',
                    'label' => 'Background',
                    'name' => self::PREFIX.'stockProgressBarColor',
                    'values' => '#ffc427',
                ),
				
            ),
            'submit' => array(
                'title' => $this->l('Save'),
            )
        );	

        $helper = new HelperForm();

        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submit'.$this->name;
        $helper->toolbar_btn = array(
            'save' =>
                array(
                    'desc' => $this->l('Save'),
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                        '&token='.Tools::getAdminTokenLite('AdminModules'),
                ),
            'back' => array(
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            )
        );
		
        $paramList = $this->getParamList();

        foreach ($paramList as $key) {
            $helper->fields_value[self::PREFIX.$key] = $this->getParam($key);
        }


        return $helper->generateForm($fields_form);
    }
	
	
	
	
	
	
	
    protected function isReceivedParamsValid($params)
    { 
        return $this->isColor($params['stockProgressBarColor']);
		
    }
	
	protected function isColor($string, $empty = true){
		
		if (!$empty OR $string != '') {
			$string = htmlspecialchars($string);
			$customvalarray = str_split('#0123456789aAbBcCdDeEfF');
			foreach (str_split($string) as $val) {
				if (!in_array($val, $customvalarray)) {
					return false;
				}
			}
		}
        return true;
	}
	
}
