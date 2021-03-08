<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:45
  from 'C:\laragon\www\enamora\themes\alinwear\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c19914f350_23957467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '192414948fb678df9c35afcae2242ecc026aa699' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\themes\\alinwear\\templates\\_partials\\footer.tpl',
      1 => 1615117509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c19914f350_23957467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeAfter'),$_smarty_tpl ) );?>

<div class="container">
  <div class="row">
  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterANLiveEditor'),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13803502526044c199144000_75012918', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container">    
     <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_726761946044c199145966_87589146', 'hook_footer_top');
?>

     </div>
  </div>
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10401213176044c1991470a7_05289813', 'hook_footer');
?>

    </div>
  </div>
	<div class="copyright-container">
	  <div class="container">
		<div class="row">
<!--
		<?php if (Module::getInstanceByName('an_theme')->getParam('copyright_showcopyright') == 1) {?>
			<p class="">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10302040376044c19914a0f4_45090888', 'copyright_link');
?>

			</p>
			<?php }?>
-->
		  <div class="col-md-12">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCopyrightContainer'),$_smarty_tpl ) );?>

		  </div>
		</div>
	  </div>
	</div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_13803502526044c199144000_75012918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_13803502526044c199144000_75012918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer_top'} */
class Block_726761946044c199145966_87589146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_top' => 
  array (
    0 => 'Block_726761946044c199145966_87589146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterTop'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_top'} */
/* {block 'hook_footer'} */
class Block_10401213176044c1991470a7_05289813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_10401213176044c1991470a7_05289813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'copyright_link'} */
class Block_10302040376044c19914a0f4_45090888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_10302040376044c19914a0f4_45090888',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<a class="_blank" href="http://www.prestashop.com" target="_blank">
				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

				</a>
			  <?php
}
}
/* {/block 'copyright_link'} */
}
