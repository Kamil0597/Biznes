<?php
/* Smarty version 3.1.48, created on 2025-01-19 19:16:45
  from '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678d418d338954_69685414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fb7f8c5eabbf4aec68d68ea51ecc1e690248317' => 
    array (
      0 => '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1737308003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678d418d338954_69685414 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {
echo '<script'; ?>
 type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

      });
<?php echo '</script'; ?>
>
<?php }
}
}
