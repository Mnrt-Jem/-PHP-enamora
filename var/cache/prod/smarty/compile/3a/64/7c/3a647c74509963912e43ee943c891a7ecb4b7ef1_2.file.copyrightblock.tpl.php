<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:45
  from 'C:\laragon\www\enamora\modules\anthemeblocks\views\templates\front\copyrightblock\copyrightblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c199578ae1_06885635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a647c74509963912e43ee943c891a7ecb4b7ef1' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anthemeblocks\\views\\templates\\front\\copyrightblock\\copyrightblock.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c199578ae1_06885635 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="an_copyright">
    <?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link != '') {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->link, ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php echo str_replace('{year}',date('Y'),$_smarty_tpl->tpl_vars['an_staticblock']->value->content);?>

    <?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link != '') {?>
    </a>
    <?php }?>
</div><?php }
}
