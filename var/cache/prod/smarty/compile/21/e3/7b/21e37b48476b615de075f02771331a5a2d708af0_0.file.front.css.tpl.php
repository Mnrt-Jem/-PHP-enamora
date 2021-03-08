<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 12:19:10
  from 'C:\laragon\www\enamora\modules\anscrolltop\views\templates\front\front.css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044b6aedbeb14_49473678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21e37b48476b615de075f02771331a5a2d708af0' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anscrolltop\\views\\templates\\front\\front.css.tpl',
      1 => 1615115929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044b6aedbeb14_49473678 (Smarty_Internal_Template $_smarty_tpl) {
?>#scrolltopbtn {
	border: <?php echo intval($_smarty_tpl->tpl_vars['BORDER_WIDTH']->value);?>
px solid <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['BORDER_COLOR']->value,'htmlall','UTF-8' ));?>
;
	border-radius: <?php echo intval($_smarty_tpl->tpl_vars['BORDER_RADIUS']->value);?>
px;
	position: fixed;
	top: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['TOP']->value,'htmlall','UTF-8' ));?>
;
	bottom: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['BOTTOM']->value,'htmlall','UTF-8' ));?>
;
	left: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['LEFT']->value,'htmlall','UTF-8' ));?>
;
	right: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['RIGHT']->value,'htmlall','UTF-8' ));?>
;
	opacity: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OPACITY']->value,'htmlall','UTF-8' ));?>
;
	background-color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['BUTTON_BG']->value,'htmlall','UTF-8' ));?>
;
	width: <?php echo intval($_smarty_tpl->tpl_vars['BUTTON_WIDTH']->value);?>
px;
	height: <?php echo intval($_smarty_tpl->tpl_vars['BUTTON_HEIGHT']->value);?>
px;
	line-height: <?php echo intval($_smarty_tpl->tpl_vars['BUTTON_HEIGHT']->value);?>
px;
	font-size: <?php echo intval($_smarty_tpl->tpl_vars['FONT_SIZE']->value);?>
px;
	color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FONT_COLOR']->value,'htmlall','UTF-8' ));?>
;
	text-align: center;
	font-family: "Ionicons";
	cursor: pointer;
	z-index: 9999;

	display: none;

	-webkit-transition: opacity 0.5s linear;
	-moz-transition: opacity 0.5s linear;
	-o-transition: opacity 0.5s linear;
	transition: opacity 0.5s linear;
}

#scrolltopbtn:hover { opacity: 1 }<?php }
}
