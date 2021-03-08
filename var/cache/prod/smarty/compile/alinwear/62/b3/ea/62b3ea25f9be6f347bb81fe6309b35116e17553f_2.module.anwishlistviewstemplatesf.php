<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'module:anwishlistviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c197601047_41115992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62b3ea25f9be6f347bb81fe6309b35116e17553f' => 
    array (
      0 => 'module:anwishlistviewstemplatesf',
      1 => 1615117508,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c197601047_41115992 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div  class="an_wishlist-nav-link" id="_desktop_an_wishlist-nav">
	<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('an_wishlist','list',array(),true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span> <?php if (($_smarty_tpl->tpl_vars['config']->value['display_likes_nav'])) {?><span class="wishlist-nav-count">(<span class="js-an_wishlist-nav-count"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['count']->value), ENT_QUOTES, 'UTF-8');?>
</span>)</span><?php }?>
	</a>
</div>

<?php }
}
