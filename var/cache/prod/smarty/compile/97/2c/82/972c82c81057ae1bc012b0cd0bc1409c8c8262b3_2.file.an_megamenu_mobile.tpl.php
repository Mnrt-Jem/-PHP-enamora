<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\themes\alinwear\modules\an_megamenu\views\templates\hook\an_megamenu_mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c197a05929_24916040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '972c82c81057ae1bc012b0cd0bc1409c8c8262b3' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\themes\\alinwear\\modules\\an_megamenu\\views\\templates\\hook\\an_megamenu_mobile.tpl',
      1 => 1615117508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c197a05929_24916040 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <?php if (!isset($_smarty_tpl->tpl_vars['an_width_on_mobile']->value)) {?>
      <?php $_smarty_tpl->_assignInScope('an_width_on_mobile', '768');?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['anmenus']->value) {?>
    <div class="mobile-amega-menu">
    
    <div id="mobile-amegamenu">
      <ul class="anav-top anav-mobile">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anmenus']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
      <li class="amenu-item mm-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['id_anmenu'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['menu']->value['dropdowns']) {?>plex<?php }?>">
        <div class="<?php if ($_smarty_tpl->tpl_vars['menu']->value['dropdowns'] && $_smarty_tpl->tpl_vars['menu']->value['drop_column']) {?>mobile_item_wrapper <?php } else { ?> mobile-item-nodropdown<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="amenu-link"><?php } else { ?><span class="amenu-link"><?php }?>
          <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php if ($_smarty_tpl->tpl_vars['menu']->value['label']) {?><sup <?php if ($_smarty_tpl->tpl_vars['menu']->value['label_color']) {?>style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['label_color'], ENT_QUOTES, 'UTF-8');?>
; color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['label_color'], ENT_QUOTES, 'UTF-8');?>
;"<?php }?>><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></sup><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['menu']->value['dropdowns']) {?><span class="mobile-toggle-plus d-flex align-items-center justify-content-center"><i class="caret-down-icon"></i></span><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['link']) {?></a><?php } else { ?></span><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['dropdowns'] && $_smarty_tpl->tpl_vars['menu']->value['drop_column']) {?>
            <span class="mobile-toggler">
              <svg 
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="5px" height="9px">
             <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
              d="M4.913,4.292 L0.910,0.090 C0.853,0.030 0.787,-0.000 0.713,-0.000 C0.639,-0.000 0.572,0.030 0.515,0.090 L0.086,0.541 C0.029,0.601 -0.000,0.670 -0.000,0.749 C-0.000,0.827 0.029,0.896 0.086,0.956 L3.462,4.500 L0.086,8.044 C0.029,8.104 -0.000,8.173 -0.000,8.251 C-0.000,8.330 0.029,8.399 0.086,8.459 L0.515,8.910 C0.572,8.970 0.639,9.000 0.713,9.000 C0.787,9.000 0.853,8.970 0.910,8.910 L4.913,4.707 C4.970,4.647 4.999,4.578 4.999,4.500 C4.999,4.422 4.970,4.353 4.913,4.292 Z"/>
             </svg>
            </span>
            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['dropdowns'] && $_smarty_tpl->tpl_vars['menu']->value['drop_column']) {?>
        <div class="adropdown-mobile" <?php if ($_smarty_tpl->tpl_vars['menu']->value['drop_bgcolor']) {?>style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['drop_bgcolor'], ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>      
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['dropdowns'], 'dropdown');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
?>
          <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['content_type'] != 'none' && $_smarty_tpl->tpl_vars['dropdown']->value['column']) {?>
          <div class="dropdown-content dd-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown']->value['id_andropdown'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['content_type'] == 'category') {?>
              <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['categories']) {?>
                <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['categoriesHtml'];?>

              <?php }?>
    
            <?php } elseif ($_smarty_tpl->tpl_vars['dropdown']->value['content_type'] == 'product') {?>
              <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['products']) {?>
              <div class="products-grid">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdown']->value['products'], 'product', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <div class="product-item">
                  <p class="product-thumbnail"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['menu_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" /></a></p>
                  <div class="product-information-dropdown">
                    <h5 class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],25,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h5>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                    <div class="product-price-and-shipping">
                       
                      <span class="price product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                   </div>
                    <?php }?>
                  </div>
                </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
              <?php }?>
    
            <?php } elseif ($_smarty_tpl->tpl_vars['dropdown']->value['content_type'] == 'manufacturer') {?>
              <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['manufacturers']) {?>
              <div class="manufacturers-grid">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdown']->value['manufacturers'], 'manufacturer', false, NULL, 'manufacturers', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
?>
                <div class="manufacturer-item">
                  <div class="left-side"><div class="logo"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title=""><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="" /></a></div></div>
                  <div class="middle-side"><a class="manufacturer-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></div>
                </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
              <?php }?>
    
            <?php } elseif ($_smarty_tpl->tpl_vars['dropdown']->value['content_type'] == 'html') {?>
              <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['static_content']) {?>
              <div class="html-item typo">
                <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['static_content'];?>

              </div>
              <?php }?>
            <?php }?>
          </div>
          <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php }?>
      </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
    </div>
    <?php }?>
    

<?php }
}
