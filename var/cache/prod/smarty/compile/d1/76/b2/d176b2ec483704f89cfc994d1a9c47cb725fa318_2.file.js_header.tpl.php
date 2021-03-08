<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\modules\an_productattributes\views\templates\front\js_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c19711f761_98187852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd176b2ec483704f89cfc994d1a9c47cb725fa318' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\an_productattributes\\views\\templates\\front\\js_header.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c19711f761_98187852 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	var an_productattributes = {
		controller: "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('an_productattributes','ajax',array(),true),'javascript','UTF-8' ));?>
",
		config: JSON.parse('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value,"javascript","UTF-8" ));?>
'),
	}
<?php echo '</script'; ?>
><?php }
}
