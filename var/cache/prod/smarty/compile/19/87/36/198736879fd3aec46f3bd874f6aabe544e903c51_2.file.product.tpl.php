<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:44
  from 'C:\laragon\www\enamora\themes\alinwear\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c198652111_15642416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '198736879fd3aec46f3bd874f6aabe544e903c51' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\themes\\alinwear\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1615117509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_6044c198652111_15642416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('image_limit', Module::getInstanceByName('an_theme')->getParam('segmentedviewsettinds_imagelimit'));
$_smarty_tpl->_assignInScope('currency_code', Context::getContext()->currency->iso_code);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17913402796044c19830c5b9_91486156', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_9953924346044c19834fb37_80612824 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		 <?php if (count($_smarty_tpl->tpl_vars['product']->value['images']) < 1) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                <img
                    src = "<?php echo htmlspecialchars(Context::getContext()->shop->getBaseURL(true), ENT_QUOTES, 'UTF-8');?>
img/p/<?php echo htmlspecialchars(Context::getContext()->language->iso_code, ENT_QUOTES, 'UTF-8');?>
.jpg"
                    alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php if (isset($_smarty_tpl->tpl_vars['image_types']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['type']->value['name'] == 'home_default') {?>
                        data-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['width'], ENT_QUOTES, 'UTF-8');?>
"
                        data-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['height'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>

                    data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                >
            </a>
        <?php } else { ?>
        <?php if (Module::isEnabled('an_theme')) {?>
	        <?php if (Module::getInstanceByName('an_theme')->getParam('product_productImageChange') == 'standart') {?>
	        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"
  			 style="height: <?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {
if (preg_replace('!\s+!u', ' ',isset($_COOKIE['an_collection_view']))) {
if ($_COOKIE['an_collection_view'] == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
} else {
if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
}
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height']), ENT_QUOTES, 'UTF-8');
}?>px;">
  				 <img
  					 src="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif
  						<?php } else { ?>
							<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
								<?php if (isset($_GET['view'])) {?>
									<?php if ($_GET['view'] == 'col2') {?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

									<?php }?>
									<?php if ($_GET['view'] == 'col3') {?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

									<?php }?>
									<?php if ($_GET['view'] == 'col4') {?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

									<?php }?>
									<?php if ($_GET['view'] == 'row') {?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

									<?php }?>
								<?php } else { ?>
									<?php if (isset($_COOKIE['an_collection_view'])) {?>
											<?php if ($_COOKIE['an_collection_view'] == 3) {?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php } else { ?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php }?>
									<?php } else { ?>
												<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php } else { ?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php }?>
									<?php }?>
								<?php }?>
  						 <?php } else { ?>
  								 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  						 <?php }?>
  						<?php }?>"
  						<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  						data-lazy-gif="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif"
  						<?php }?>
  					 data-catalog-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>
"
  					 data-catalog-medium="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
  					 data-catalog-large="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  					 alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
  					 data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  					 class="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?> b-lazy <?php }?>"
  					 data-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
  					 data-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
  					 content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
  					 data-src="<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  								 <?php if (isset($_COOKIE['an_collection_view'])) {?>
  										 <?php if ($_COOKIE['an_collection_view'] == 3) {?>
  												 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  										 <?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  												 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  										 <?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  												 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  										 <?php } else { ?>
  												 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  										 <?php }?>
  								 <?php } else { ?>
  										 <?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  												 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  										 <?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  												 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  										 <?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  												 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  										 <?php } else { ?>
  												 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  										 <?php }?>
  								 <?php }?>
  						 <?php } else { ?>
  								 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  						 <?php }?>"
  				 >
  		 </a>
  <?php } elseif (Module::getInstanceByName('an_theme')->getParam('product_productImageChange') == 'hover') {?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"
  					style="height: <?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {
if (preg_replace('!\s+!u', ' ',isset($_COOKIE['an_collection_view']))) {
if ($_COOKIE['an_collection_view'] == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
} else {
if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
}
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height']), ENT_QUOTES, 'UTF-8');
}?>px;">
  					<?php $_smarty_tpl->_assignInScope('imgcount', "1");?>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'foo', array (
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                     <?php if (($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) || $_smarty_tpl->tpl_vars['imgcount']->value) {?>
                       <?php if (($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image'])) {
$_smarty_tpl->_assignInScope('imgcount', $_smarty_tpl->tpl_vars['imgcount']->value+1);
}?>
                       <?php $_smarty_tpl->_assignInScope('imgcount', $_smarty_tpl->tpl_vars['imgcount']->value-1);?>
  							<img    width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                                    height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
  									class="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?> b-lazy <?php }?> img_hover_change <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> cover <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'] : null) == 1) {?> only_one <?php }?>"
  									data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
  									src="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif
  									<?php } else { ?>
									  <?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
										<?php if (isset($_GET['view'])) {?>
											<?php if ($_GET['view'] == 'col2') {?>
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php }?>
											<?php if ($_GET['view'] == 'col3') {?>
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php }?>
											<?php if ($_GET['view'] == 'col4') {?>
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php }?>
											<?php if ($_GET['view'] == 'row') {?>
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

											<?php }?>
										<?php } else { ?>
  											<?php if (isset($_COOKIE['an_collection_view'])) {?>
  													<?php if ($_COOKIE['an_collection_view'] == 3) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } else { ?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php }?>
  											<?php } else { ?>
  													<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } else { ?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php }?>
											  <?php }?>
										<?php }?>
  									<?php } else { ?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php }?>
  							<?php }?>"
  							<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  							data-lazy-gif="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif"
  							<?php }?>
  							data-catalog-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>
"
  							data-catalog-medium="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
  							data-catalog-large="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  							alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
  							data-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
  							data-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
  							content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
  							data-src="<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  									<?php if (isset($_COOKIE['an_collection_view'])) {?>
  											<?php if ($_COOKIE['an_collection_view'] == 3) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } else { ?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php }?>
  									<?php } else { ?>
  											<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } else { ?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php }?>
  									<?php }?>
  							<?php } else { ?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  						<?php }?>"
  						>
  				    <?php }?>
  					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  					</a>
  <?php } elseif (Module::getInstanceByName('an_theme')->getParam('product_productImageChange') == 'hover-slider') {?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail hover_slider"
  											style="height: <?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {
if (preg_replace('!\s+!u', ' ',isset($_COOKIE['an_collection_view']))) {
if ($_COOKIE['an_collection_view'] == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
} else {
if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
}
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height']), ENT_QUOTES, 'UTF-8');
}?>px;">

  	<ul <?php if (count($_smarty_tpl->tpl_vars['product']->value['images']) == 1) {?> class="only_one_item"<?php }?>>
  		<li class="cover-item">
  			<div class="hover-slider-img">
  				<img
  															 src="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  																<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif
  																<?php } else { ?>
  																	 <?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  																		 <?php if (isset($_COOKIE['an_collection_view'])) {?>
  																				 <?php if ($_COOKIE['an_collection_view'] == 3) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } else { ?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php }?>
  																		 <?php } else { ?>
  																					 <?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } else { ?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php }?>
  																		 <?php }?>
  																 <?php } else { ?>
  																		 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  																 <?php }?>
  																<?php }?>"
  																<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  																data-lazy-gif="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif"
  																<?php }?>
  															 data-catalog-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>
"
  															 data-catalog-medium="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
  															 data-catalog-large="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  															 alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
  															 data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  															 class="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?> b-lazy <?php }?>  hover-slider-image"
  															 data-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
  															 data-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
  															 content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
  															 data-src="<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  																		 <?php if (isset($_COOKIE['an_collection_view'])) {?>
  																				 <?php if ($_COOKIE['an_collection_view'] == 3) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } else { ?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php }?>
  																		 <?php } else { ?>
  																				 <?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php } else { ?>
  																						 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																				 <?php }?>
  																		 <?php }?>
  																 <?php } else { ?>
  																		 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  																 <?php }?>"
  														 >
  			</div>
  		</li>
  							<?php $_smarty_tpl->_assignInScope('image_limit_other', $_smarty_tpl->tpl_vars['image_limit']->value);?>
  							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'hoverslider', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_hoverslider']->value['iteration']++;
?>
  									<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_hoverslider']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_hoverslider']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['image_limit']->value && $_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?>
  										<?php $_smarty_tpl->_assignInScope('image_limit_other', $_smarty_tpl->tpl_vars['image_limit']->value-1);?>
  									<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_hoverslider']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_hoverslider']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['image_limit']->value && $_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?>
  											<?php $_smarty_tpl->_assignInScope('image_limit_other', $_smarty_tpl->tpl_vars['image_limit']->value-1);?>
  									<?php }?>
  							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'hoverslider', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_hoverslider']->value['iteration']++;
?>
  									<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] != $_smarty_tpl->tpl_vars['product']->value['cover']['id_image'] && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_hoverslider']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_hoverslider']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['image_limit_other']->value) {?>
  				<li class="no-cover-item">
  					<div class="hover-slider-img">
  						<?php if (Module::getInstanceByName('an_theme')->getParam('segmentedviewsettinds_textonlastimg') == 1) {?>
  							<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_hoverslider']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_hoverslider']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['image_limit_other']->value && (count($_smarty_tpl->tpl_vars['product']->value['images'])-$_smarty_tpl->tpl_vars['image_limit']->value) > 0) {?>
  								<div class="more-images">
  									<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['product']->value['images'])-$_smarty_tpl->tpl_vars['image_limit']->value, ENT_QUOTES, 'UTF-8');?>

  									<?php if ((count($_smarty_tpl->tpl_vars['product']->value['images'])-$_smarty_tpl->tpl_vars['image_limit']->value) == 1) {?>
  										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'more image','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  									<?php } else { ?>
  										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'more images','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  									<?php }?>
  								</div>
  							<?php }?>
  						<?php }?>
  						<img
  																					class="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?> b-lazy <?php }?>  hover-slider-image"
  																					data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
  																					src="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  																					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif
  																					<?php } else { ?>
  																					<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  																							<?php if (isset($_COOKIE['an_collection_view'])) {?>
  																									<?php if ($_COOKIE['an_collection_view'] == 3) {?>
  																											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  																									<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  																											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																									<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  																											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  																									<?php } else { ?>
  																											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																									<?php }?>
  																							<?php } else { ?>
  																									<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  																											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  																									<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  																											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																									<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  																											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  																									<?php } else { ?>
  																											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																									<?php }?>
  																							<?php }?>
  																					<?php } else { ?>
  																							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  																					<?php }?>
  																			<?php }?>"
  																			<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  																			data-lazy-gif="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif"
  																			<?php }?>
  																			data-catalog-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>
"
  																			data-catalog-medium="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
  																			data-catalog-large="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  																			alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
  																			data-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
  																			data-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
  																			content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
  																			data-src="<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  																					<?php if (isset($_COOKIE['an_collection_view'])) {?>
  																							<?php if ($_COOKIE['an_collection_view'] == 3) {?>
  																									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  																							<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  																									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																							<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  																									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  																							<?php } else { ?>
  																									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																							<?php }?>
  																					<?php } else { ?>
  																							<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  																									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  																							<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  																									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																							<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  																									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  																							<?php } else { ?>
  																									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  																							<?php }?>
  																					<?php }?>
  																			<?php } else { ?>
  																					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  																		<?php }?>"
  																		>
  					</div>
  				</li>
  			<?php }?>
  		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  	</ul>
  </a>
  <?php } else { ?>
  <div class="slider_product-wrapper">
  					<div class="slider-product-item">
  					 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"
  					 style="height: <?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {
if (preg_replace('!\s+!u', ' ',isset($_COOKIE['an_collection_view']))) {
if ($_COOKIE['an_collection_view'] == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
} else {
if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
}
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height']), ENT_QUOTES, 'UTF-8');
}?>px;">
  						<img
  						src="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif
  							<?php } else { ?>
  									<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  											<?php if (isset($_COOKIE['an_collection_view'])) {?>
  													<?php if ($_COOKIE['an_collection_view'] == 3) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } else { ?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php }?>
  											<?php } else { ?>
  													<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php } else { ?>
  															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  													<?php }?>
  											<?php }?>
  									<?php } else { ?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php }?>
  							<?php }?>"
  								<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  							data-lazy-gif="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif"
  							<?php }?>
  							data-catalog-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>
"
  							data-catalog-medium="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
  							data-catalog-large="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  						 alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
  						 data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  						 class="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?> b-lazy <?php }?> slider_product cover"
  						 data-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
  						 data-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
  						 content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
  						 data-src="<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  							<?php if (isset($_COOKIE['an_collection_view'])) {?>
  									<?php if ($_COOKIE['an_collection_view'] == 3) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } else { ?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php }?>
  							<?php } else { ?>
  										<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } else { ?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php }?>
  							<?php }?>
  						<?php } else { ?>
  							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  						<?php }?>"
  						>
  					</a>
  				 </div>
  					 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
  						 <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] != $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?>
  						 <div class="slider-product-item">
  						 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"
  						 style="height: <?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {
if (preg_replace('!\s+!u', ' ',isset($_COOKIE['an_collection_view']))) {
if ($_COOKIE['an_collection_view'] == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
} else {
if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
}
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height']), ENT_QUOTES, 'UTF-8');
}?>px;">
  							 <img
  							 class="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?> b-lazy <?php }?> slider_product not_cover"
  								data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
  								src="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif
  									<?php } else { ?>
  											<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  									<?php if (isset($_COOKIE['an_collection_view'])) {?>
  											<?php if ($_COOKIE['an_collection_view'] == 3) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } else { ?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php }?>
  									<?php } else { ?>
  												<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } else { ?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php }?>
  									<?php }?>
  							<?php } else { ?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  							<?php }?>
  							<?php }?>"
  							<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  						data-lazy-gif="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif"
  						<?php }?>
  							data-catalog-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>
"
  							data-catalog-medium="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
  							data-catalog-large="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  							alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
  							data-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
  							data-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
  							content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
  							data-src="<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  									<?php if (isset($_COOKIE['an_collection_view'])) {?>
  											<?php if ($_COOKIE['an_collection_view'] == 3) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } else { ?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php }?>
  									<?php } else { ?>
  											<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php } else { ?>
  													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  											<?php }?>
  									<?php }?>
  							<?php } else { ?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  							<?php }?>"
  							 >
  							</a>
  						 </div>
  							<?php }?>
  						 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  				 </div>
  <?php }?>
  <?php } else { ?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"
  style="height: <?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {
if (preg_replace('!\s+!u', ' ',isset($_COOKIE['an_collection_view']))) {
if ($_COOKIE['an_collection_view'] == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
} else {
if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
}
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height']), ENT_QUOTES, 'UTF-8');
}?>px;">
  		<img
  		src="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  				 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif
  				 <?php } else { ?>
  						<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  							<?php if (isset($_COOKIE['an_collection_view'])) {?>
  									<?php if ($_COOKIE['an_collection_view'] == 3) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } else { ?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php }?>
  							<?php } else { ?>
  										<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php } else { ?>
  											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  									<?php }?>
  							<?php }?>
  					<?php } else { ?>
  							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>

  					<?php }?>
  				 <?php }?>"
  				 <?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?>
  				 data-lazy-gif="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/an_theme/views/img/loading.gif"
  				 <?php }?>
  				data-catalog-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>
"
  				data-catalog-medium="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
  				data-catalog-large="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  			alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
  			data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
  			class="<?php if (Module::getInstanceByName('an_theme')->getParam('product_lazyLoad')) {?> b-lazy <?php }?> "
  			data-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
  			data-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
  			content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
  			data-src="<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
  					<?php if (isset($_COOKIE['an_collection_view'])) {?>
  							<?php if ($_COOKIE['an_collection_view'] == 3) {?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  							<?php } elseif ($_COOKIE['an_collection_view'] == 4) {?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  							<?php } elseif ($_COOKIE['an_collection_view'] == 6) {?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  							<?php } else { ?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  							<?php }?>
  					<?php } else { ?>
  								<?php if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['url'], ENT_QUOTES, 'UTF-8');?>

  							<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  							<?php } elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['url'], ENT_QUOTES, 'UTF-8');?>

  							<?php } else { ?>
  									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['url'], ENT_QUOTES, 'UTF-8');?>

  							<?php }?>
  					<?php }?>
  				<?php }?>"
  		>
  </a>
  		<?php }?>
  		<?php }?>
  		<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_reviews'} */
class Block_8797013426044c198608902_67700109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'quick_view'} */
class Block_14250652626044c19860d2e0_15544207 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <a class="quick-view" href="#" data-link-action="quickview">
				<i class="material-icons search">&#xE8B6;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			  </a>
			<?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_variants'} */
class Block_1145476996044c198610cd7_96279251 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
			  <?php }?>
			<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_name'} */
class Block_19157227306044c198614094_42270539 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
        <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_description_short'} */
class Block_1700643306044c198622943_81256901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	          	<p class="an_short_description" id="an_short_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
	          		<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),$_smarty_tpl->tpl_vars['max_length']->value,'...' )), ENT_QUOTES, 'UTF-8');?>

	        	</p>
	        <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_price_and_shipping'} */
class Block_19304854916044c198626522_03176588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping" itemprop="offers" itemscope itemtype="http://schema.org/Offer" priceValidUntil="">
							<meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
							<meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
							<link itemprop="availability" href="http://schema.org/InStock">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

              <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
							<span class="price" itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
								<span class="money" <?php if (isset($_smarty_tpl->tpl_vars['currency_code']->value)) {?>data-currency-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['currency_code']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
							</span>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])) {?>
					<?php $_smarty_tpl->_assignInScope('min_quantity', $_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']);?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('min_quantity', $_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);?>
				<?php }?>
				<?php if (Module::isEnabled('an_theme')) {?>
		            <?php if (Module::getInstanceByName('an_theme')->getParam('product_addtocart') == 'button' || Module::getInstanceByName('an_theme')->getParam('product_addtocart') == 'qtyandbutton') {?>
						<div class="atc_div">
		                <?php if (Module::getInstanceByName('an_theme')->getParam('product_addtocart') == 'qtyandbutton') {?>
							<input name="qty" type="number" min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min_quantity']->value, ENT_QUOTES, 'UTF-8');?>
" max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" class="form-control atc_qty" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"/>
		                <?php }?>
							<button class="add_to_cart btn btn-primary btn-sm <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'unavailable') {?>disabled<?php }?>  " onclick="mypresta_productListCart.add($(this));">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

							</button>
						</div>
		            <?php }?>
		        <?php }?>
            </div>
          <?php }?>

        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_flags'} */
class Block_14345444306044c1986449b4_21958170 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <ul class="product-flags">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <li class="product-flag discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</li>
             <?php } else { ?>
                <li class="product-flag discount-percentage">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl ) );?>

                </li>
              <?php }?>
          <?php }?>
        </ul>
      </a>
      <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_miniature_item'} */
class Block_17913402796044c19830c5b9_91486156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_17913402796044c19830c5b9_91486156',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_9953924346044c19834fb37_80612824',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_8797013426044c198608902_67700109',
  ),
  'quick_view' => 
  array (
    0 => 'Block_14250652626044c19860d2e0_15544207',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1145476996044c198610cd7_96279251',
  ),
  'product_name' => 
  array (
    0 => 'Block_19157227306044c198614094_42270539',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_1700643306044c198622943_81256901',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_19304854916044c198626522_03176588',
  ),
  'product_flags' => 
  array (
    0 => 'Block_14345444306044c1986449b4_21958170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
     <article class="product-miniature js-product-miniature
     <?php if (Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('product_productMobileRow')) {?>
        product-mobile-row
    <?php }?>
	<?php if (Module::isEnabled('an_theme')) {?>
	js-img-view-type
	type-<?php echo htmlspecialchars(Module::getInstanceByName('an_theme')->getParam('product_productImageChange'), ENT_QUOTES, 'UTF-8');?>

	<?php }?>
	<?php if (isset($_COOKIE['an_collection_view']) && isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
	col-lg-<?php echo htmlspecialchars($_COOKIE['an_collection_view'], ENT_QUOTES, 'UTF-8');?>

	<?php }?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container ">
			
			<div class="thumbnail-container-image" style="<?php if (isset($_smarty_tpl->tpl_vars['image_types']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
if ($_smarty_tpl->tpl_vars['type']->value['name'] == 'home_default') {?>min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['height'], ENT_QUOTES, 'UTF-8');?>
px;<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?> min-height: <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height']) {
if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {
if (preg_replace('!\s+!u', ' ',isset($_COOKIE['an_collection_view']))) {
if ($_COOKIE['an_collection_view'] == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif ($_COOKIE['an_collection_view'] == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
} else {
if (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 3) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_small']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 4) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
} elseif (Module::getInstanceByName('an_theme')->getParam('categoryPage_productsAmount') == 6) {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_large']['height']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['catalog_medium']['height']), ENT_QUOTES, 'UTF-8');
}
}
} else {
echo htmlspecialchars(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height']), ENT_QUOTES, 'UTF-8');
}?>px;<?php } else { ?>250px<?php }?>">
		<?php if (isset($_smarty_tpl->tpl_vars['product']->value->ean13) && $_smarty_tpl->tpl_vars['product']->value->ean13) {?>
        <meta itemprop="gtin13" content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EAN Code:'),$_smarty_tpl ) );
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->ean13, ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value->isbn) && $_smarty_tpl->tpl_vars['product']->value->isbn) {?>
        <meta itemprop="gtin13" content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ISBN Code:'),$_smarty_tpl ) );
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->isbn, ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value->upc) && $_smarty_tpl->tpl_vars['product']->value->upc) {?>
        <meta itemprop="gtin13" content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPC Code:'),$_smarty_tpl ) );
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->upc, ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url']) && $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url']) {?>
        <meta itemprop="image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']) && $_smarty_tpl->tpl_vars['product']->value['id_manufacturer']) {?>
        <meta itemprop="brand" content="<?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['description_short']) && $_smarty_tpl->tpl_vars['product']->value['description_short']) {?>
        <meta itemprop="description" content="<?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']), ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
		<meta itemprop="sku" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
">
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9953924346044c19834fb37_80612824', 'product_thumbnail', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8797013426044c198608902_67700109', 'product_reviews', $this->tplIndex);
?>

			<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
		  <?php if (Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('product_showquickview') == 1) {?>
		  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14250652626044c19860d2e0_15544207', 'quick_view', $this->tplIndex);
?>

			
			<?php }?>

			<?php if (!Module::isEnabled('an_productattributes')) {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1145476996044c198610cd7_96279251', 'product_variants', $this->tplIndex);
?>

			<?php }?>
		  </div>
		</div>
		
      <div class="product-description">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19157227306044c198614094_42270539', 'product_name', $this->tplIndex);
?>

		
		<?php if (Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('product_imageQuickLookBar') == 1) {?>
		<div class="product-miniature-images-all">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
		  <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] != $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?>
		  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="">
			<img
			  class="product-miniature-images-all-img"
			  src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['slider_photo']['url'], ENT_QUOTES, 'UTF-8');?>
"
			  alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
			>
		   </a>
		   <?php }?>
		  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<?php }?>
		
        <?php if (Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('product_shortdescription') == 1) {?>
        <?php $_smarty_tpl->_assignInScope('max_length', Module::getInstanceByName('an_theme')->getParam('product_shortdescriptionlength'));?>
	        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1700643306044c198622943_81256901', 'product_description_short', $this->tplIndex);
?>

        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19304854916044c198626522_03176588', 'product_price_and_shipping', $this->tplIndex);
?>


       
      </div>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14345444306044c1986449b4_21958170', 'product_flags', $this->tplIndex);
?>

    </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
