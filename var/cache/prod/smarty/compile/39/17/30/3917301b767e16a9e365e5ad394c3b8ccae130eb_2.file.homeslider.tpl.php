<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\modules\anthemeblocks\views\templates\front\homeslider\homeslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c197aded86_68533385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3917301b767e16a9e365e5ad394c3b8ccae130eb' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anthemeblocks\\views\\templates\\front\\homeslider\\homeslider.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c197aded86_68533385 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="anthemeblocks_homeslider-block <?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata && $_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_mobile == '0') {?>  anthemeblocks-homeslider-hide-mobile<?php }?>">
	<div class="<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_responsiveImage == '1') {?>img-responsive<?php }?> anthemeblocks-homeslider<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata) {?> anthemeblocks-homeslider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_textpostion, ENT_QUOTES, 'UTF-8');?>
 owl-dots_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_dots, ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_preloader == '0') {?>owl-carousel<?php }?> owl-theme<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata && $_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_mobile == '0') {?>  anthemeblocks-homeslider-hide-mobile<?php }?>" id="anthemeblocks-homeslider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata) {?> data-items="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_items, ENT_QUOTES, 'UTF-8');?>
" data-nav="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_nav, ENT_QUOTES, 'UTF-8');?>
" data-loop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_loop, ENT_QUOTES, 'UTF-8');?>
"   data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_autoplay, ENT_QUOTES, 'UTF-8');?>
" data-autoplaytimeout="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_autoplayTimeout, ENT_QUOTES, 'UTF-8');?>
" data-smartspeed="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_smartSpeed, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_staticblock']->value->getChildrenBlocks(), 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
		<div class="item"><?php echo $_smarty_tpl->tpl_vars['block']->value->getContent();?>
</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata) {?>
		<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_homeslider_preloader) {?>
		<div class="anthemeblocks-homeslider-loader">
			<div class="loader-dots">
				<div class="loader-image"></div>
			</div>
		</div>
		<?php }?>
	<?php }?>
</div><?php }
}
