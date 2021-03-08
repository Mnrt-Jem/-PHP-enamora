<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:45
  from 'C:\laragon\www\enamora\themes\alinwear\modules\an_productattributes\views\templates\front\productattributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c19905e1a8_14023092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5436535d0cc58852f3004ee801a12ddfa84d3a43' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\themes\\alinwear\\modules\\an_productattributes\\views\\templates\\front\\productattributes.tpl',
      1 => 1615117508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./product-variants.tpl' => 1,
    'file:./product-select.tpl' => 1,
  ),
),false)) {
function content_6044c19905e1a8_14023092 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="an_productattributes">
<form method="post" class="an_productattributesForm" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
<input name="token" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" type="hidden">
<input name="id_product" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" type="hidden">
<?php if ($_smarty_tpl->tpl_vars['config']->value['display_quantity'] != '1') {?>
<input name="qty" type="hidden" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['minimal_quantity']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" min="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['minimal_quantity']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

	
	<?php if ($_smarty_tpl->tpl_vars['config']->value['type_view'] == 'standart') {?>
	<div class="js-an_productattributes-standart">
		<?php $_smarty_tpl->_subTemplateRender('file:./product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['type_view'] == 'select' && isset($_smarty_tpl->tpl_vars['productData']->value) && count($_smarty_tpl->tpl_vars['productData']->value) > 0) {?>
	<div class="an_productattributes-select js-an_productattributes-select">
		<?php $_smarty_tpl->_subTemplateRender('file:./product-select.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<?php }?>
			
	<?php if (isset($_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog'] && $_smarty_tpl->tpl_vars['config']->value['display_add_to_cart'] == '1') {?>
	<div class="an_productattributes-qty-add clearfix">

		<?php if ($_smarty_tpl->tpl_vars['config']->value['display_quantity'] == '1') {?>
		<div class="an_productattributes-qty-container">
		  <input type="number" name="qty" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['minimal_quantity']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="input-group form-control an_productattributes-qty" min="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['minimal_quantity']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['order_out_of_stock']->value) {?> data-max="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['quantity']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?> aria-label="Quantity" style="display: block;">
		</div>
		<?php }?>

		<div class="an_productattributes-add">
		  <button class="btn an_productattributes-add-to-cart-btn js-an_productattributes-add-to-cart" data-button-action="add-to-cart" type="submit" <?php if ($_smarty_tpl->tpl_vars['availableForOrder']->value != '1') {?> disabled="disabled"<?php }?> data-status="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['availableForOrder']->value, ENT_QUOTES, 'UTF-8');?>
">
			<i class="material-icons shopping-cart"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

		  </button>
		</div>
	</div>
	<?php }?>
</form>
</div><?php }
}
