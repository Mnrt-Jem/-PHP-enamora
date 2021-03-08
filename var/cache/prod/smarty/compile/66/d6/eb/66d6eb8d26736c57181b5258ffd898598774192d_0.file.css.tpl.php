<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 12:19:15
  from 'C:\laragon\www\enamora\modules\an_cookie_popup\views\templates\front\css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044b6b364d769_30406383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d6eb8d26736c57181b5258ffd898598774192d' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\an_cookie_popup\\views\\templates\\front\\css.tpl',
      1 => 1615115929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044b6b364d769_30406383 (Smarty_Internal_Template $_smarty_tpl) {
?>
.notification_cookie {
    background:<?php echo $_smarty_tpl->tpl_vars['an_modal_cookie_background']->value;?>
;
    opacity:<?php echo $_smarty_tpl->tpl_vars['an_modal_cookie_opacity']->value;?>
%;
    <?php if ($_smarty_tpl->tpl_vars['an_modal_cookie_width']->value) {?>width:<?php echo $_smarty_tpl->tpl_vars['an_modal_cookie_width']->value;?>
px;<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['an_modal_cookie_height']->value) {?>height:<?php echo $_smarty_tpl->tpl_vars['an_modal_cookie_height']->value;?>
px;<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['an_modal_cookie_position']->value == 'bl' || !$_smarty_tpl->tpl_vars['an_modal_cookie_position']->value) {?>
    bottom: 30px;
    left: 30px;
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['an_modal_cookie_position']->value == 'br') {?>
    bottom: 30px;
    right: 30px;
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['an_modal_cookie_position']->value == 'tl') {?>
    top: 30px;
    left: 30px;
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['an_modal_cookie_position']->value == 'tr') {?>
    top: 30px;
    right: 30px;
    <?php }?>
}

.notification_cookie a, .notification_cookie span {
    color: <?php echo $_smarty_tpl->tpl_vars['an_modal_cookie_links_color']->value;?>
;
}
.notification_cookie p,
.notification_cookie {
    color: <?php echo $_smarty_tpl->tpl_vars['an_modal_cookie_text_color']->value;?>
;
}
<?php }
}
