<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-07 13:05:43
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6044c1975d8e05_83615332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1615117508,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6044c1975d8e05_83615332 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_user_info">
  <div class="user-info">
      <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <a
        class="account dropdown-item
        <?php if ($_smarty_tpl->tpl_vars['an_width_on_mobile']->value == '992') {?>
          hidden-lg-up
        <?php } else { ?>
          hidden-md-up
        <?php }?>
        "
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
        rel="nofollow"
        > 
          <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['customerName']->value,20,'...' )), ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
        <div class="signin dropdown js-dropdown
        <?php if ($_smarty_tpl->tpl_vars['an_width_on_mobile']->value == '992') {?>
          hidden-md-down
        <?php } else { ?>
          hidden-sm-down
        <?php }?>
        ">
          <button data-toggle="dropdown" class="hidden-sm-down btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logout dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
            <span class="expand-more"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['customerName']->value,20,'...' )), ENT_QUOTES, 'UTF-8');?>
</span>
            <i class="material-icons expand-more">keyboard_arrow_down</i>
          </button>
        <ul class="dropdown-menu  
          " aria-labelledby="signin-label">
          <li>
              <a
                class="logout dropdown-item"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                rel="nofollow"
              >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My profile','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </a>
            </li>
          <li>
            <a
              class="logout dropdown-item"
              href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
              rel="nofollow"
            >
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </a>
          </li>
        </ul>
      </div>
      <?php } else { ?>
        <a
          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
          title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
          rel="nofollow"
          class="user_info_icon"
        >
        <?php if ((Module::isEnabled('an_theme') && (Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header1' || Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header2' || Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header3' || Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header4' || Module::getInstanceByName('an_theme')->getParam('header_typeHeader') == 'header5'))) {?>
            <svg class="svg_user_info_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve"><g><path d="M50,50.3c9.9,0,17.9-8,17.9-17.9s-8-17.9-17.9-17.9s-17.9,8-17.9,17.9S40.1,50.3,50,50.3z M50,20.5   c6.6,0,11.9,5.3,11.9,11.9S56.6,44.3,50,44.3S38.1,39,38.1,32.4S43.4,20.5,50,20.5z"/><path d="M50,53.8c-16.9,0-30.7,13.8-30.7,30.7v1h6v-1c0-13.6,11.1-24.7,24.7-24.7c13.6,0,24.7,11.1,24.7,24.7v1h6v-1   C80.7,67.6,66.9,53.8,50,53.8z"/></g></svg>
         <?php }?>

          <span class="account-login"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
      <?php }?>
  </div>
</div>
<?php }
}
