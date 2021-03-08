<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\themes\alinwear\modules\an_megamenu\views\templates\hook\an_megamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c1978bb116_05508378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd850eb0f6575b21d7ce59fc8bda063ad287feeb8' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\themes\\alinwear\\modules\\an_megamenu\\views\\templates\\hook\\an_megamenu.tpl',
      1 => 1615117508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c1978bb116_05508378 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['anmenus']->value) {?>
<div class="amega-menu hidden-sm-down">
<div id="amegamenu" class="<?php if ($_smarty_tpl->tpl_vars['is_rtl']->value) {?>amegamenu_rtl<?php }?>">
  <div class="fixed-menu-container">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFixedMenuLeft'),$_smarty_tpl ) );?>

  <ul class="anav-top">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anmenus']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
  <li class="amenu-item mm-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['id_anmenu'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['menu']->value['dropdowns']) {?>plex<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['menu']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="amenu-link"><?php } else { ?><span class="amenu-link"><?php }?>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>

      <?php if ($_smarty_tpl->tpl_vars['menu']->value['label']) {?><sup <?php if ($_smarty_tpl->tpl_vars['menu']->value['label_color']) {?>style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['label_color'], ENT_QUOTES, 'UTF-8');?>
; color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['label_color'], ENT_QUOTES, 'UTF-8');?>
;"<?php }?>><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></sup><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['menu']->value['link']) {?></a><?php } else { ?></span><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['menu']->value['dropdowns'] && $_smarty_tpl->tpl_vars['menu']->value['drop_column']) {?>
    <span class="mobile-toggle-plus"><i class="caret-down-icon"></i></span>
    <div class="adropdown adropdown-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['drop_column'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['menu']->value['drop_bgcolor']) {?>style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['drop_bgcolor'], ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
      
      <div class="dropdown-bgimage" <?php if ($_smarty_tpl->tpl_vars['menu']->value['drop_bgimage']) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg_image_url']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['drop_bgimage'], ENT_QUOTES, 'UTF-8');?>
'); background-position: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['bgimage_position'], ENT_QUOTES, 'UTF-8');?>
; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['position'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>></div>
      
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['dropdowns'], 'dropdown');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
?>
     
      <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['content_type'] != 'none' && $_smarty_tpl->tpl_vars['dropdown']->value['column']) {?>
      <div class="dropdown-content acontent-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown']->value['column'], ENT_QUOTES, 'UTF-8');?>
 dd-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown']->value['id_andropdown'], ENT_QUOTES, 'UTF-8');?>
">
		<?php if ($_smarty_tpl->tpl_vars['dropdown']->value['title'] != '') {?>
		<h5 class="category-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h5>	  
		<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['content_type'] == 'category') {?>
          <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['categories']) {?>
          <div class="categories-grid">
            <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['drop_bgimage']) {?>
            <img class="category-item-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg_image_url']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown']->value['drop_bgimage'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
          	<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['categoriesHtml'];?>

          </div>
          <?php }?>

        <?php } elseif ($_smarty_tpl->tpl_vars['dropdown']->value['content_type'] == 'product') {?>
          <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['products']) {?>
          <div class="products-grid">
          <div class="dropdown-bgimage" <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['drop_bgimage']) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg_image_url']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown']->value['drop_bgimage'], ENT_QUOTES, 'UTF-8');?>
');"<?php }?>></div>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdown']->value['products'], 'product', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <div class="product-item">
              <div class="product-thumbnail"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><img class="img-fluid" src="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['menu_default'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['menu_default']['url'], ENT_QUOTES, 'UTF-8');
} else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" /></a></div>
              <div class="product-information-dropdown">
                <h5 class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h5>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                <div class="product-price-and-shipping">
               <span class="price product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span> <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div>
                
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
          <div class="dropdown-bgimage" <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['drop_bgimage']) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg_image_url']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown']->value['drop_bgimage'], ENT_QUOTES, 'UTF-8');?>
');"<?php }?>></div>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdown']->value['manufacturers'], 'manufacturer', false, NULL, 'manufacturers', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
?>
            <div class="manufacturer-item brand-base">
              <div class="left-side"><div class="logo"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title=""><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="" /></a></div></div>
              <div class="middle-side"><a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['url'], ENT_QUOTES, 'UTF-8');?>
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
           
          <div class="dropdown-bgimage" <?php if ($_smarty_tpl->tpl_vars['dropdown']->value['drop_bgimage']) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg_image_url']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown']->value['drop_bgimage'], ENT_QUOTES, 'UTF-8');?>
');"<?php }?>></div>
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
  <div class="col-md-2 fixed-menu-right">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFixedMenuRight'),$_smarty_tpl ) );?>

  </div>
  
 </div>
</div>
</div>
<?php }
}
}
