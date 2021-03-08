<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:45
  from 'C:\laragon\www\enamora\modules\anthemeblocks\views\templates\front\paymentsmethod\paymentsmethod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c199493f23_65849116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c312d11b132bdf55f1907ddf6fed68dd4941b520' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anthemeblocks\\views\\templates\\front\\paymentsmethod\\paymentsmethod.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c199493f23_65849116 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="anthemeblocks-footer-payments col-md-3">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_staticblock']->value->getChildrenBlocks(), 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
<li><?php echo $_smarty_tpl->tpl_vars['block']->value->getContent();?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
