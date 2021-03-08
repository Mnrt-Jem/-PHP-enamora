<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\modules\anthemeblocks\views\templates\front\producttabs\producttabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c197da7765_92577004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab7f06b2af440a1b2d5271108747e270af7cffba' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anthemeblocks\\views\\templates\\front\\producttabs\\producttabs.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c197da7765_92577004 (Smarty_Internal_Template $_smarty_tpl) {
if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','<')) {?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_staticblock']->value->getChildrenBlocks(), 'block', false, NULL, 'fonavcontent', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fonavcontent']->value['iteration']++;
?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value->getContent();?>
	
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>
<div class="anthemeblocks-producttabs">
<div class="container">
	<ul class="nav nav-tabs">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_staticblock']->value->getChildrenBlocks(), 'block', false, NULL, 'fonavname', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fonavname']->value['iteration']++;
?>
		<li class="nav-item">
			<a class="nav-link<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fonavname']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fonavname']->value['iteration'] : null) == '1') {?> active<?php }?>" data-toggle="tab" href="#anthemeblocks-producttabs<?php echo $_smarty_tpl->tpl_vars['block']->value->id;?>
">
				<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value->title,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

			</a>
		</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<div class="tab-content" id="tab-content" style="padding-top: 10px;">	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_staticblock']->value->getChildrenBlocks(), 'block', false, NULL, 'fonavcontent', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fonavcontent']->value['iteration']++;
?>
		<div class="tab-pane fade in<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fonavcontent']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fonavcontent']->value['iteration'] : null) == '1') {?> active<?php }?>" id="anthemeblocks-producttabs<?php echo $_smarty_tpl->tpl_vars['block']->value->id;?>
">
			<section class="featured-products clearfix">
				<div class="products">
					<?php echo $_smarty_tpl->tpl_vars['block']->value->getContent();?>
	
				</div>
			</section>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
</div>
<?php }
}
}
