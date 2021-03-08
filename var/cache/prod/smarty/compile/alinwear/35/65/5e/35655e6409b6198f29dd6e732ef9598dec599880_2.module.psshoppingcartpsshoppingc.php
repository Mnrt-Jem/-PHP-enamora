<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c19765ae59_06502856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1615117509,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' => 1,
  ),
),false)) {
function content_6044c19765ae59_06502856 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_cart">
  <div class="blockcart cart-preview js-sidebar-cart-trigger <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
        <a class="blockcart-link" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.458333 33.0729175" x="0px" y="0px"><path d="m2.1332616 273.45266a.52920428.52921798 0 0 0 -.122469 1.04747l1.978635.4346.508479 2.42a.52920428.52921798 0 0 0 .0011.005l2.521739 11.41994a.52920428.52921798 0 0 0 .516746.41497h14.2819194a.52920428.52921798 0 1 0 0-1.05832h-13.8566744l-.486778-2.205h15.0642774a.52920428.52921798 0 0 0 .516749-.41495l1.801389-8.15711a.52920428.52921798 0 0 0 -.51675-.64338c-6.299049.00016-12.598071 0-18.8970074-.003l-.489877-2.33112a.52920428.52921798 0 0 0 -.404614-.40823l-2.311939-.50746a.52920428.52921798 0 0 0 -.104901-.014zm3.540249 4.31911c6.0031104.003 12.0062374.003 18.0092354.003l-1.567818 7.09877h-14.8730794zm5.2496604 12.54029c-1.0354384 0-1.8845774.85272-1.8845874 1.88876-.000011 1.03601.849134 1.88875 1.8845874 1.88875 1.03545 0 1.884595-.85274 1.884584-1.88875-.00001-1.03604-.84915-1.88876-1.884584-1.88876zm7.590014 0c-1.035437 0-1.884576.85272-1.884586 1.88876-.00001 1.03601.849135 1.88875 1.884586 1.88875 1.03545 0 1.884595-.85274 1.884584-1.88875-.000009-1.03604-.849148-1.88876-1.884584-1.88876zm-7.590014 1.05832c.461674 0 .826276.36454.826282.83044.000005.46587-.364603.83044-.826282.83044-.46168 0-.826291-.36457-.826285-.83044.000005-.4659.36461-.83044.826285-.83044zm7.590014 0c.461673 0 .826278.36454.826282.83044.000005.46587-.364602.83044-.826282.83044s-.826288-.36457-.826283-.83044c.000004-.4659.364609-.83044.826283-.83044z" transform="translate(0 -270.54165)"/></svg>
          <div class="cart-products-block">
              <span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' items','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
          <span class="cart-products-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
          </div>
        </a>
        
    </div>
    <div class="cart-dropdown js-cart-source hidden-xs-up">
      <div class="cart-dropdown-wrapper">
        <div class="cart-title">
          <h4 class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
          <ul class="cart-items">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
              <li class="cart-product-line"><?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
          <div class="cart-bottom">
            <div class="cart-subtotals">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['subtotal']->value) {?>
                <div class="total-line <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
                  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <span class="value price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <?php }?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <hr>
            <div class="cart-total total-line">
              <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
              <span class="value price price-total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
                 
            <div class="cart-summary-line cart-total">
                <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
           
            <div class="cart-action">
              <div class="text-center">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
<i class="caret-right"></i></a>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="no-items">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no more items in your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

          </div>
        <?php }?>
      </div>
    </div>

  </div>
</div>
<?php }
}
