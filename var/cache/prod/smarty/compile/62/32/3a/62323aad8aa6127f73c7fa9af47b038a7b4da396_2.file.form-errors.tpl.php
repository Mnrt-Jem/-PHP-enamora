<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:37
  from 'C:\laragon\www\enamora\themes\alinwear\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c191b6c864_00711109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62323aad8aa6127f73c7fa9af47b038a7b4da396' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\themes\\alinwear\\templates\\_partials\\form-errors.tpl',
      1 => 1615117509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c191b6c864_00711109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16572403836044c191b69e28_23239135', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_16572403836044c191b69e28_23239135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_16572403836044c191b69e28_23239135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
