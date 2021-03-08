<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 12:19:14
  from 'C:\laragon\www\enamora\modules\an_brandslider\views\templates\hook\js_generator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044b6b2b6d410_83391024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b4c8d375fa8c8dbd288f503c9fde27bf6df7d2e' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\modules\\an_brandslider\\views\\templates\\hook\\js_generator.tpl',
      1 => 1615115929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044b6b2b6d410_83391024 (Smarty_Internal_Template $_smarty_tpl) {
?>
var an_brandslider_params = JSON.parse("<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_slider_options']->value,'javascript','UTF-8' ));?>
");
<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','<')) {?>
an_brandslider_params['navText'] = ['<i class="an_brandslider-icon an_brandslider-icon-prev"></i>','<i class="an_brandslider-icon an_brandslider-icon-next"></i>'];
<?php } else { ?>
an_brandslider_params['navText'] = ['<i class="material-icons">&#xE314;</i>','<i class="material-icons">&#xE315;</i>'];
<?php }?>
an_brandslider_params['navContainer'] = '.an_brandslider-items .owl-stage-outer';
$(document).ready(function(){ $('.an_brandslider-items').owlCarouselAnBS(an_brandslider_params); });<?php }
}
