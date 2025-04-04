<?php
/* Smarty version 3.1.48, created on 2025-01-20 14:17:25
  from '/var/www/html/themes/classic/templates/customer/authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678e4ce5cd86d5_18953460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f08b6056eb8b0c2685352bd18552d755dcb04db' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/authentication.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678e4ce5cd86d5_18953460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1674588425678e4ce5cb54f3_65190342', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_640935446678e4ce5cc5972_03152415', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_1674588425678e4ce5cb54f3_65190342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1674588425678e4ce5cb54f3_65190342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
class Block_2116763212678e4ce5cc7274_10418820 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_1620865107678e4ce5cc5c63_56115308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section class="login-form">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

      </section>
      <hr/>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2116763212678e4ce5cc7274_10418820', 'display_after_login_form', $this->tplIndex);
?>

      <div class="no-account">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_640935446678e4ce5cc5972_03152415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_640935446678e4ce5cc5972_03152415',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_1620865107678e4ce5cc5c63_56115308',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_2116763212678e4ce5cc7274_10418820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1620865107678e4ce5cc5c63_56115308', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
