<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:45
  from 'C:\laragon\www\enamora\modules\anthemeblocks\views\templates\front\reviews\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c1992182e2_24603536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feda90db3f69c0920a739e056faec534d1315125' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anthemeblocks\\views\\templates\\front\\reviews\\item.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c1992182e2_24603536 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link != '') {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->link, ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
	<div class="anthemeblocks-reviews-desc">
		<?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->content;?>

		<div class="review_name">
		<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink() != '') {?>
		<img width="auto" height="auto"
            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink(), ENT_QUOTES, 'UTF-8');?>
" class="man" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_staticblock']->value->title,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<?php }?>
		<h2><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_staticblock']->value->title,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h2>
		</div>
	</div>
<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link != '') {?>
</a>
<?php }
}
}
