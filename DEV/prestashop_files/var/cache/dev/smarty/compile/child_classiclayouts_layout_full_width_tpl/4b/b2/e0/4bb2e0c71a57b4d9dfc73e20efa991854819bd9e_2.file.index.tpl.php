<?php
/* Smarty version 3.1.48, created on 2025-01-19 18:57:41
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678d3d1528a0e3_15635739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bb2e0c71a57b4d9dfc73e20efa991854819bd9e' => 
    array (
      0 => '/var/www/html/themes/classic/templates/index.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678d3d1528a0e3_15635739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2018495525678d3d15288353_97876857', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_472958090678d3d152886d2_34861111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_4086618678d3d152892d0_77419177 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_903475242678d3d15288ea0_66771476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4086618678d3d152892d0_77419177', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2018495525678d3d15288353_97876857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2018495525678d3d15288353_97876857',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_472958090678d3d152886d2_34861111',
  ),
  'page_content' => 
  array (
    0 => 'Block_903475242678d3d15288ea0_66771476',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4086618678d3d152892d0_77419177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_472958090678d3d152886d2_34861111', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_903475242678d3d15288ea0_66771476', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
