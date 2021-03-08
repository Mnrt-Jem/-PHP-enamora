<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:45
  from 'C:\laragon\www\enamora\modules\anthemeblocks\views\templates\front\reviews\reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c19919ffd4_12913275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a46ca26f0a2360cdd31247ab173b9910934c28b0' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anthemeblocks\\views\\templates\\front\\reviews\\reviews.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c19919ffd4_12913275 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
<div class="anthemeblocks-reviews owl-carousel owl-theme<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata && $_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_reviews_mobile == '0') {?>  anthemeblocks-reviews-hide-mobile<?php }?>" id="anthemeblocks-reviews_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink() != '') {?>style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink(), ENT_QUOTES, 'UTF-8');?>
);"<?php }?> <?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata) {?> data-nav="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_reviews_nav, ENT_QUOTES, 'UTF-8');?>
" data-dots="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_reviews_dots, ENT_QUOTES, 'UTF-8');?>
" data-loop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_reviews_loop, ENT_QUOTES, 'UTF-8');?>
"   data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_reviews_autoplay, ENT_QUOTES, 'UTF-8');?>
" data-autoplaytimeout="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->formdata->additional_field_reviews_autoplayTimeout, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_staticblock']->value->getChildrenBlocks(), 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
	<div class="item container">
		<?php echo $_smarty_tpl->tpl_vars['block']->value->getContent();?>

	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
}
