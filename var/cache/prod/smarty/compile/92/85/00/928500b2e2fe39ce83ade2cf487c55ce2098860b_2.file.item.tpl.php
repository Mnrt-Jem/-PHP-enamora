<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:44
  from 'C:\laragon\www\enamora\modules\anthemeblocks\views\templates\front\producttabs\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c198e06412_56599749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '928500b2e2fe39ce83ade2cf487c55ce2098860b' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anthemeblocks\\views\\templates\\front\\producttabs\\item.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:$tpl_dir./product-list.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_6044c198e06412_56599749 (Smarty_Internal_Template $_smarty_tpl) {
if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','<')) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_staticblock']->value->products, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender('file:$tpl_dir./product-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_staticblock']->value->products, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
		<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
