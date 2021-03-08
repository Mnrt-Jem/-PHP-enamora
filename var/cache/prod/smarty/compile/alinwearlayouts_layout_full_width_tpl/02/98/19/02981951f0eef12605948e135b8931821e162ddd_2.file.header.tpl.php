<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'C:\laragon\www\enamora\themes\alinwear\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c197534034_00163263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02981951f0eef12605948e135b8931821e162ddd' => 
    array (
      0 => 'C:\\laragon\\www\\enamora\\themes\\alinwear\\templates\\_partials\\header.tpl',
      1 => 1615117509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c197534034_00163263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

  <?php if ($_smarty_tpl->tpl_vars['an_width_on_mobile']->value == '992') {?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12215081516044c197516c16_54381749', 'header_banner');
?>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16616538436044c197518689_04433519', 'header_nav');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17993514666044c19751a6d9_83493636', 'header_top');
?>




  <?php } else { ?>
    

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_641518676044c19752d397_80163745', 'header_banner');
?>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18215288676044c19752ea13_57832984', 'header_nav');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5430696586044c197530948_48211645', 'header_top');
?>


  <?php }?>  
<?php }
/* {block 'header_banner'} */
class Block_12215081516044c197516c16_54381749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_12215081516044c197516c16_54381749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-banner">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_16616538436044c197518689_04433519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_16616538436044c197518689_04433519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="header-nav tablet-h" >
      <div class="container">
          <div class="row">
            <div class="hidden-md-down header-nav-inside vertical-center">
              <div class="col-md-6 col-xs-12" >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

              </div>
              <div class="col-md-6 right-nav">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

              </div>

            </div>
            <div class="hidden-lg-up text-sm-center mobile">
              <div class="float-xs-left" id="menu-icon">
                <i class="material-icons d-inline">&#xE5D2;</i>
              </div>
              <div class="float-xs-right" id="_mobile_cart"></div>
              <div class="top-logo" id="_mobile_logo"></div>
              <div class="clearfix"></div>
            </div>
          </div>
      </div>
    </nav>
  <?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_17993514666044c19751a6d9_83493636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_17993514666044c19751a6d9_83493636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-top tablet-h" data-mobilemenu='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_width_on_mobile']->value, ENT_QUOTES, 'UTF-8');?>
'>
      <?php if ((Module::isEnabled('an_theme') && (Module::getInstanceByName('an_theme')->getParam('header_typeHeader') !== 'header4'))) {?>
      <div class="container">
      <?php }?>       
        <div class="<?php if ((Module::isEnabled('an_theme') && Module::getInstanceByName('an_theme')->getParam('header_typeHeader') !== 'header4')) {?>row 
           <?php }?>vertical-center header-top-wrapper">
            <?php if ((Module::isEnabled('an_theme') && (Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header4'))) {?>
            <div class="div_top_left container">
            <?php }?>
            <div class="col-md-3 left-col"></div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopLeft'),$_smarty_tpl ) );?>

            <?php if ((Module::isEnabled('an_theme') && (Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header4'))) {?>
            </div>
            <?php }?>
          <?php if ((Module::isEnabled('an_theme') && (Module::getInstanceByName('an_theme')->getParam('header_typeHeader') !== 'header4'))) {?>
          <div class="position-static">
            <div class="vertical-center">
          <?php }?> 
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

              <div class="clearfix"></div>
          <?php if ((Module::isEnabled('an_theme') && (Module::getInstanceByName('an_theme')->getParam('header_typeHeader') !== 'header4'))) {?>
            </div>
          </div>
          <?php }?>
        </div>
        
       <div class="amegamenu_mobile-cover"></div>
            <div class="amegamenu_mobile-modal">
              <div id="mobile_top_menu_wrapper" class="row hidden-lg-up" data-level="0">
                <div class="mobile-menu-header">
                  <div class="megamenu_mobile-btn-back">
                      <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="26px" height="12px">
                     <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
                      d="M25.969,6.346 C25.969,5.996 25.678,5.713 25.319,5.713 L3.179,5.713 L7.071,1.921 C7.324,1.673 7.324,1.277 7.071,1.029 C6.817,0.782 6.410,0.782 6.156,1.029 L1.159,5.898 C0.905,6.145 0.905,6.542 1.159,6.789 L6.156,11.658 C6.283,11.782 6.447,11.844 6.616,11.844 C6.785,11.844 6.949,11.782 7.076,11.658 C7.330,11.411 7.330,11.014 7.076,10.767 L3.184,6.975 L25.329,6.975 C25.678,6.975 25.969,6.697 25.969,6.346 Z"/>
                     </svg>
                  </div>
                  <div class="megamenu_mobile-btn-close">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="16px" height="16px">
                    <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
                    d="M16.002,0.726 L15.274,-0.002 L8.000,7.273 L0.725,-0.002 L-0.002,0.726 L7.273,8.000 L-0.002,15.274 L0.725,16.002 L8.000,8.727 L15.274,16.002 L16.002,15.274 L8.727,8.000 L16.002,0.726 Z"/>
                    </svg>
                  </div>

                </div>
                  <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                  <div class="js-top-menu-bottom">
                    <div class="mobile-menu-fixed">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMobileMenu'),$_smarty_tpl ) );?>


                      <div id="_mobile_an_wishlist-nav"></div>

                      <div class="mobile-lang-and-cur">
                        <div id="_mobile_currency_selector"></div>
                        <div id="_mobile_language_selector"></div>
                        <div  id="_mobile_user_info"></div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'header_top'} */
/* {block 'header_banner'} */
class Block_641518676044c19752d397_80163745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_641518676044c19752d397_80163745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-banner">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_18215288676044c19752ea13_57832984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_18215288676044c19752ea13_57832984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="header-nav tablet-v">
      <div class="container">
          <div class="row">
            <div class="hidden-sm-down header-nav-inside vertical-center">
              <div class="col-md-4 col-xs-12" >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

              </div>
              <div class="col-md-8 right-nav">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

              </div>
            </div>
            <div class="hidden-md-up text-sm-center mobile">
              <div class="float-xs-left" id="menu-icon">
                <i class="material-icons d-inline">&#xE5D2;</i>
              </div>
              <div class="float-xs-right" id="_mobile_cart"></div>
              <div class="top-logo" id="_mobile_logo"></div>
              <div class="clearfix"></div>
            </div>
          </div>
      </div>
    </nav>
  <?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_5430696586044c197530948_48211645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_5430696586044c197530948_48211645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-top tablet-v" data-mobilemenu='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['an_width_on_mobile']->value, ENT_QUOTES, 'UTF-8');?>
'>
      <div class="container">
        <div class="row vertical-center header-top-wrapper">
         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopLeft'),$_smarty_tpl ) );?>

          <div class="col-md-12 col-xs-12 position-static">
            <div class="row vertical-center">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

              <div class="clearfix"></div>
            </div>
          </div>
        </div>
       <div class="amegamenu_mobile-cover"></div>
            <div class="amegamenu_mobile-modal">
              <div id="mobile_top_menu_wrapper" class="row hidden-lg-up" data-level="0">
                <div class="mobile-menu-header">
                  <div class="megamenu_mobile-btn-back">
                      <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="26px" height="12px">
                     <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
                      d="M25.969,6.346 C25.969,5.996 25.678,5.713 25.319,5.713 L3.179,5.713 L7.071,1.921 C7.324,1.673 7.324,1.277 7.071,1.029 C6.817,0.782 6.410,0.782 6.156,1.029 L1.159,5.898 C0.905,6.145 0.905,6.542 1.159,6.789 L6.156,11.658 C6.283,11.782 6.447,11.844 6.616,11.844 C6.785,11.844 6.949,11.782 7.076,11.658 C7.330,11.411 7.330,11.014 7.076,10.767 L3.184,6.975 L25.329,6.975 C25.678,6.975 25.969,6.697 25.969,6.346 Z"/>
                     </svg>
                  </div>
                  <div class="megamenu_mobile-btn-close">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="16px" height="16px">
                    <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
                    d="M16.002,0.726 L15.274,-0.002 L8.000,7.273 L0.725,-0.002 L-0.002,0.726 L7.273,8.000 L-0.002,15.274 L0.725,16.002 L8.000,8.727 L15.274,16.002 L16.002,15.274 L8.727,8.000 L16.002,0.726 Z"/>
                    </svg>
                  </div>

                </div>
                  <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                  <div class="js-top-menu-bottom">
                    <div class="mobile-menu-fixed">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMobileMenu'),$_smarty_tpl ) );?>


                      <div id="_mobile_an_wishlist-nav"></div>

                      <div class="mobile-lang-and-cur">
                        <div id="_mobile_currency_selector"></div>
                        <div id="_mobile_language_selector"></div>
                        <div  id="_mobile_user_info"></div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'header_top'} */
}
