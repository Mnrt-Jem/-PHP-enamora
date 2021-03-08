<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:00:29
  from 'C:\laragon\www\enamora\backoffice\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c05d52b701_27631725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e86c7f9026e30f241bef37d6291242ee887b1cf3' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\backoffice\\themes\\new-theme\\template\\content.tpl',
      1 => 1613657793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c05d52b701_27631725 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
