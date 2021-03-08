<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c19791aaa1_75885497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1615117509,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c19791aaa1_75885497 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block search module TOP -->
<!-- && $page.page_name !== 'pagenotfound' -->

<div id="_desktop_search">
<?php if (($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'search' && count($_smarty_tpl->tpl_vars['listing']->value['products']) !== 0) || ($_smarty_tpl->tpl_vars['page']->value['page_name'] !== 'pagenotfound' && $_smarty_tpl->tpl_vars['page']->value['page_name'] !== 'search')) {
if ((Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('header_typeHeader') !== 'header3')) {?>

<svg class="search-icon open-icon"
    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><path class="open-icon-path" d="M90.4,84L75.8,69.5C87.2,54.9,86,34.1,72.9,21c-6.9-6.9-16.1-10.7-25.9-10.7c-9.8,0-19,3.8-25.9,10.7  c-6.9,6.9-10.7,16.1-10.7,25.9c0,9.8,3.8,19,10.7,25.9c6.9,6.9,16.1,10.7,25.9,10.7c8.1,0,16.1-2.7,22.5-7.8L84,90.4  c0.9,0.9,2,1.3,3.2,1.3c1.2,0,2.3-0.5,3.2-1.3C92.2,88.7,92.2,85.8,90.4,84z M74.6,46.9c0,7.4-2.9,14.3-8.1,19.5  c-5.2,5.2-12.2,8.1-19.5,8.1s-14.3-2.9-19.5-8.1c-5.2-5.2-8.1-12.2-8.1-19.5c0-7.4,2.9-14.3,8.1-19.5s12.2-8.1,19.5-8.1  c7.4,0,14.3,2.9,19.5,8.1C71.7,32.6,74.6,39.5,74.6,46.9z"/>
</svg>
<?php }
}?>

<?php if ((Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header3')) {?>
<div id="search_header_3"></div>
<?php }?>
<div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">

	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
		<button type="submit">
			<?php if ((Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header1') || (Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header2') || (Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header3') || (Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header4') || (Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header5')) {?>
	       <svg class="search-icon-in"
	       xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
	       <path d="M90.4,84L75.8,69.5C87.2,54.9,86,34.1,72.9,21c-6.9-6.9-16.1-10.7-25.9-10.7c-9.8,0-19,3.8-25.9,10.7  c-6.9,6.9-10.7,16.1-10.7,25.9c0,9.8,3.8,19,10.7,25.9c6.9,6.9,16.1,10.7,25.9,10.7c8.1,0,16.1-2.7,22.5-7.8L84,90.4  c0.9,0.9,2,1.3,3.2,1.3c1.2,0,2.3-0.5,3.2-1.3C92.2,88.7,92.2,85.8,90.4,84z M74.6,46.9c0,7.4-2.9,14.3-8.1,19.5  c-5.2,5.2-12.2,8.1-19.5,8.1s-14.3-2.9-19.5-8.1c-5.2-5.2-8.1-12.2-8.1-19.5c0-7.4,2.9-14.3,8.1-19.5s12.2-8.1,19.5-8.1  c7.4,0,14.3,2.9,19.5,8.1C71.7,32.6,74.6,39.5,74.6,46.9z"/>
	       </svg>
	   <?php }?>
      <span class="hidden-xl-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
		</button>
	</form>
</div>
</div>
<!-- /Block search module TOP --><?php }
}
