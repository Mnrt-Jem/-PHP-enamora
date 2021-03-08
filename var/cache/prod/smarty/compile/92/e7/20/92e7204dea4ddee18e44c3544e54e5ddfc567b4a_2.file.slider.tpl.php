<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:45
  from 'C:\laragon\www\enamora\modules\an_brandslider\views\templates\hook\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c199260fe8_07798722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92e7204dea4ddee18e44c3544e54e5ddfc567b4a' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\an_brandslider\\views\\templates\\hook\\slider.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c199260fe8_07798722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="an_brandslider-block" class="clearfix">
<div class="container">
	<?php if ($_smarty_tpl->tpl_vars['doshowtitle']->value && $_smarty_tpl->tpl_vars['title']->value != '') {?>
	<div class="an_brandslider-title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
	<?php }?>
	<div class="owl-carousel an_brandslider-items">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_manufacturers']->value, 'manufacturer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
?>
		<div class="an_brandslider-item">
			<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'an_brandslider'),$_smarty_tpl ) );?>
">
				<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','<>')) {?>
					<img width="auto" height="auto"
					 src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" />
				<?php } else { ?>
					<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['image'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['an_brandslider_options']->value['displayName']) && $_smarty_tpl->tpl_vars['an_brandslider_options']->value['displayName'] == true) {?>
					<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
				<?php }?>
			</a>
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
