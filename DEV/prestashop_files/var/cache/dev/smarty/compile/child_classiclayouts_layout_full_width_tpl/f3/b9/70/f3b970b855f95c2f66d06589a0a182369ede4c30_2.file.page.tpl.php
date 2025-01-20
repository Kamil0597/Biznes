<?php
/* Smarty version 3.1.48, created on 2025-01-20 14:20:54
  from '/var/www/html/themes/classic/templates/customer/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678e4db6d3db76_62636078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3b970b855f95c2f66d06589a0a182369ede4c30' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/page.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/notifications.tpl' => 1,
    'file:customer/_partials/my-account-links.tpl' => 1,
  ),
),false)) {
function content_678e4db6d3db76_62636078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80683319678e4db6d3aa04_90691182', 'notifications');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_391366481678e4db6d3af06_15972564', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138087755678e4db6d3d1f3_09585537', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_80683319678e4db6d3aa04_90691182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_80683319678e4db6d3aa04_90691182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'customer_notifications'} */
class Block_81118366678e4db6d3b362_78568442 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'customer_notifications'} */
/* {block 'page_content_top'} */
class Block_1171965871678e4db6d3b155_02659924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81118366678e4db6d3b362_78568442', 'customer_notifications', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1541653378678e4db6d3cb33_25653786 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Page content -->
    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_391366481678e4db6d3af06_15972564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_391366481678e4db6d3af06_15972564',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1171965871678e4db6d3b155_02659924',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_81118366678e4db6d3b362_78568442',
  ),
  'page_content' => 
  array (
    0 => 'Block_1541653378678e4db6d3cb33_25653786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1171965871678e4db6d3b155_02659924', 'page_content_top', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1541653378678e4db6d3cb33_25653786', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'my_account_links'} */
class Block_2007480217678e4db6d3d413_61246651 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_138087755678e4db6d3d1f3_09585537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_138087755678e4db6d3d1f3_09585537',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_2007480217678e4db6d3d413_61246651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2007480217678e4db6d3d413_61246651', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
