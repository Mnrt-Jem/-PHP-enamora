<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\modules\anthemeblocks\views\templates\front\categoriesproduct\middle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c197cd2d46_93898081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eee78b0b2659cb016208e8a4a3c9c8db4f0f855' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\anthemeblocks\\views\\templates\\front\\categoriesproduct\\middle.tpl',
      1 => 1615117505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c197cd2d46_93898081 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="anthemeblocks-categoriesproduct-item">
	<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link != '') {?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->link, ENT_QUOTES, 'UTF-8');?>
">
	<?php }?>
		
		<div class="categoriesproduct-image">
			<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink() != '') {?>
			<img width="auto" height="auto"
			src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink(), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_staticblock']->value->title,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
			<?php }?>
			<div class="categoriesproduct-content">
              <h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_staticblock']->value->title,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
			  <!-- <?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->content;?>
 -->
              <div class="banner-p">
                <p class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more','mod'=>'anthemeblocks'),$_smarty_tpl ) );?>
</p>
              </div> 
			</div>

		</div>
		
	<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link != '') {?>
	</a>
	<?php }?>
</div><?php }
}
