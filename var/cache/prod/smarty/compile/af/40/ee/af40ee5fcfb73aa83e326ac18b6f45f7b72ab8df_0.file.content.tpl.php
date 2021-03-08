<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:01:05
  from 'C:\laragon\www\enamora\backoffice\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c081b902e4_47009039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af40ee5fcfb73aa83e326ac18b6f45f7b72ab8df' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\backoffice\\themes\\default\\template\\content.tpl',
      1 => 1613657793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c081b902e4_47009039 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
