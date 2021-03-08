<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\modules\anthemeblocks\views\templates\front\categoriesproduct\categoriesproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c197be33d9_83489594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dff91c3ba5cad8fc2985d8b6483315dfb5f8f61' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anthemeblocks\\views\\templates\\front\\categoriesproduct\\categoriesproduct.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c197be33d9_83489594 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="categoriesproduct-block container">
<!--	<h2 class='decor_line'><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_staticblock']->value->title,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h2>-->
	<div class="anthemeblocks-categoriesproduct row">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_staticblock']->value->getChildrenBlocks(), 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value->getContent();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div><?php }
}
