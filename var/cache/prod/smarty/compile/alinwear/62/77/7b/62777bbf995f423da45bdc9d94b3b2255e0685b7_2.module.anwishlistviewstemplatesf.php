<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:44
  from 'module:anwishlistviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c198ef43c6_59397454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62777bbf995f423da45bdc9d94b3b2255e0685b7' => 
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
function content_6044c198ef43c6_59397454 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="an_wishlist-mini js-an_wishlist-container">
	<span class="js-an_wishlist-addremove<?php if ($_smarty_tpl->tpl_vars['status']->value) {?> an_wishlist-in<?php }?>" data-url="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_wishlistAjax']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
">
		<svg class="an_wishlist-icon"
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         width="24px" height="20px">
        <path fill-rule="evenodd"
         d="M22.249,1.965 C21.065,0.698 19.423,-0.000 17.625,-0.000 C15.096,-0.000 13.495,1.425 12.597,2.620 C12.364,2.930 12.166,3.241 12.000,3.534 C11.834,3.241 11.636,2.930 11.403,2.620 C10.505,1.425 8.904,-0.000 6.375,-0.000 C4.577,-0.000 2.935,0.698 1.751,1.965 C0.622,3.173 0.000,4.792 0.000,6.523 C0.000,8.406 0.780,10.158 2.454,12.036 C3.950,13.715 6.102,15.445 8.595,17.448 C9.523,18.194 10.484,18.967 11.506,19.810 L11.537,19.836 C11.669,19.945 11.835,20.000 12.000,20.000 C12.165,20.000 12.331,19.945 12.463,19.836 L12.494,19.810 C13.516,18.967 14.477,18.195 15.406,17.448 C17.898,15.445 20.050,13.715 21.546,12.036 C23.220,10.158 24.000,8.406 24.000,6.523 C24.000,4.792 23.378,3.173 22.249,1.965 ZM14.493,16.438 C13.693,17.082 12.869,17.744 12.000,18.457 C11.131,17.744 10.307,17.082 9.506,16.438 C4.629,12.517 1.406,9.927 1.406,6.523 C1.406,5.115 1.903,3.808 2.806,2.842 C3.719,1.865 4.986,1.326 6.375,1.326 C8.303,1.326 9.549,2.447 10.255,3.387 C10.888,4.229 11.219,5.079 11.331,5.405 C11.426,5.679 11.696,5.863 12.000,5.863 C12.304,5.863 12.574,5.679 12.669,5.405 C12.781,5.079 13.112,4.229 13.745,3.387 C14.451,2.447 15.697,1.326 17.625,1.326 C19.013,1.326 20.281,1.865 21.194,2.842 C22.097,3.808 22.594,5.115 22.594,6.523 C22.594,9.927 19.371,12.517 14.493,16.438 Z"/>
        </svg>
        <svg  class="an_wishlist-icon-active"
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         width="24px" height="20px">
        <path fill-rule="evenodd"  fill="rgb(91, 167, 24)"
         d="M22.249,1.965 C21.065,0.698 19.423,-0.000 17.625,-0.000 C15.096,-0.000 13.495,1.425 12.597,2.620 C12.364,2.930 12.166,3.241 12.000,3.534 C11.834,3.241 11.636,2.930 11.403,2.620 C10.505,1.425 8.904,-0.000 6.375,-0.000 C4.577,-0.000 2.935,0.698 1.751,1.965 C0.622,3.173 0.000,4.792 0.000,6.523 C0.000,8.406 0.780,10.158 2.454,12.036 C3.950,13.715 6.102,15.445 8.595,17.448 C9.523,18.194 10.484,18.967 11.506,19.810 L11.537,19.836 C11.669,19.945 11.835,20.000 12.000,20.000 C12.165,20.000 12.331,19.945 12.463,19.836 L12.494,19.810 C13.516,18.967 14.477,18.195 15.406,17.448 C17.898,15.445 20.050,13.715 21.546,12.036 C23.220,10.158 24.000,8.406 24.000,6.523 C24.000,4.792 23.378,3.173 22.249,1.965 Z"/>
        </svg>
	</span>
	<?php if (($_smarty_tpl->tpl_vars['config']->value['display_likes_product_mini'])) {?>
	<div class="an_wishlist-mini-count js-an_wishlist-product-count"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['countWishlists']->value), ENT_QUOTES, 'UTF-8');?>
</div>
	<?php }?>
</div><?php }
}
