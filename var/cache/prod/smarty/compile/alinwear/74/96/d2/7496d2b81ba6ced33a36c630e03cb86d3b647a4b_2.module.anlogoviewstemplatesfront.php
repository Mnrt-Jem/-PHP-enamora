<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'module:anlogoviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c19762f9b6_94817290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7496d2b81ba6ced33a36c630e03cb86d3b647a4b' => 
    array (
      0 => 'module:anlogoviewstemplatesfront',
      1 => 1615117505,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c19762f9b6_94817290 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-2 hidden-sm-down" id="_desktop_logo">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
		<?php if ($_smarty_tpl->tpl_vars['an_logo_view_type']->value == 'svg' && $_smarty_tpl->tpl_vars['an_logo_img']->value) {?>
			<img  width="auto" height="auto"
			class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_logo_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
		<?php } else { ?>
			<img  width="auto" height="auto"
			class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
		<?php }?>
	</a>
</div><?php }
}
