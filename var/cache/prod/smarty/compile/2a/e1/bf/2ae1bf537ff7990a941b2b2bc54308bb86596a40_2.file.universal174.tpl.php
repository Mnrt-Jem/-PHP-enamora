<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\modules\anblog\views\templates\hook\universal174.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c197303a20_74923987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae1bf537ff7990a941b2b2bc54308bb86596a40' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anblog\\views\\templates\\hook\\universal174.tpl',
      1 => 1615117504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:anblog/views/templates/front/default/_listing_blog.tpl' => 1,
  ),
),false)) {
function content_6044c197303a20_74923987 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['articles']->value) && !empty($_smarty_tpl->tpl_vars['articles']->value)) {?>
	<div class="clearfix"></div>
	<div class="secondary-blog">
		<div class="row">
			<div class="an_brandslider-title"><h3><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['anblog_main_page']->value, ENT_QUOTES, 'UTF-8');?>
">Blog</a></h3></div>
		</div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'blog', false, NULL, 'articlesListing', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_articlesListing']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_articlesListing']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_articlesListing']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_articlesListing']->value['total'];
?>
			<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_articlesListing']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_articlesListing']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['columnCount']->value == 1) && $_smarty_tpl->tpl_vars['columnCount']->value > 1) {?>
				<div class="row">
			<?php }?>
			<div class="<?php if ($_smarty_tpl->tpl_vars['columnCount']->value <= 1) {?>no<?php }?>col-lg-<?php echo htmlspecialchars(floor(12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['columnCount']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">

				<?php $_smarty_tpl->_subTemplateRender("module:anblog/views/templates/front/default/_listing_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			</div>
			<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_articlesListing']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_articlesListing']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['columnCount']->value == 0 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_articlesListing']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_articlesListing']->value['last'] : null)) && $_smarty_tpl->tpl_vars['columnCount']->value > 1) {?>
				</div>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<div class="clearfix"></div>
<?php }?>

<?php }
}
