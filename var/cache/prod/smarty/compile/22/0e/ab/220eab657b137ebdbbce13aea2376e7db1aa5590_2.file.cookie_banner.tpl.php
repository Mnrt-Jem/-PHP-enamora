<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\modules\an_cookie_popup\views\templates\front\cookie_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c1971fbde1_34892847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220eab657b137ebdbbce13aea2376e7db1aa5590' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\an_cookie_popup\\views\\templates\\front\\cookie_banner.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c1971fbde1_34892847 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="notification_cookie">
    <div class="notification_cookie-content">
        <?php echo $_smarty_tpl->tpl_vars['an_modal_cookie_text']->value;?>
        <div class="notification_cookie-action">
            <?php if ($_smarty_tpl->tpl_vars['an_modal_cookie_privacy_link']->value) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_modal_cookie_privacy_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="notification_cookie-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_modal_cookie_privacy']->value, ENT_QUOTES, 'UTF-8');?>
</a>
            <?php }?>
            <span class="notification_cookie-accept"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_modal_cookie_accept']->value, ENT_QUOTES, 'UTF-8');?>
<i class="material-icons">done</i></span>
        </div>
    </div>
</div><?php }
}
