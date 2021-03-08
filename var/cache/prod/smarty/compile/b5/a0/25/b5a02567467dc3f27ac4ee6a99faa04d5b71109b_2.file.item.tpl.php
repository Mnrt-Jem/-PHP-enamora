<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\modules\anthemeblocks\views\templates\front\homeslider\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c197b65749_85914568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a02567467dc3f27ac4ee6a99faa04d5b71109b' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anthemeblocks\\views\\templates\\front\\homeslider\\item.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c197b65749_85914568 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link != '') {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->link, ENT_QUOTES, 'UTF-8');?>
">
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink() != '') {?>
	<img width="auto" height="auto"
	src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink(), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_staticblock']->value->title,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<?php }?>
	<div class="anthemeblocks-homeslider-desc">
		<div class="container">
			<h2 class="wow fadeInUp" data-wow-duration=".75s" data-wow-delay="0.25s"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_staticblock']->value->title,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h2>
			<div class="block-text wow fadeInUp" data-wow-duration=".75s" data-wow-delay="0.5s">
			<?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->content;?>

			</div>
			<div class="slider-line wow fadeInUp" data-wow-duration=".75s" data-wow-delay="0.5s"></div>
			<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link != '' && $_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_item_button == 0) {?>
			<div class="btn-box">
				<button class="btn btn-primary wow fadeInUp" data-wow-duration=".75s" data-wow-delay="1s"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more','mod'=>'anthemeblocks'),$_smarty_tpl ) );?>
</button>
			</div>
			<?php }?>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link != '') {?>
</a>
<?php }
}
}
