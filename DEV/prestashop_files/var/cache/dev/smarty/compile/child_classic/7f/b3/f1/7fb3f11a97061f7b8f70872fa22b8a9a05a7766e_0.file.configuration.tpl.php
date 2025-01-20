<?php
/* Smarty version 3.1.48, created on 2025-01-19 18:33:52
  from '/var/www/html/modules/ps_googleanalytics/views/templates/admin/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678d37808a52d2_23195652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fb3f11a97061f7b8f70872fa22b8a9a05a7766e' => 
    array (
      0 => '/var/www/html/modules/ps_googleanalytics/views/templates/admin/configuration.tpl',
      1 => 1737308003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678d37808a52d2_23195652 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
	<div id="google_analytics_top">
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/ga_logo.png" class="img-responsive" alt="Google Analytics" />
	</div>
	<hr/>
	<div id="google_analytics_content">
		<div class="row">
			<div class="col-lg-6">
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customers go everywhere; shouldn\'t your analytics.','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</p>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Analytics shows you the full customer picture across ads and videos, websites and social tools, tables and smartphones. That makes it easier to serve your current customers and win new ones.','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</p>
				<p><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With ecommerce functionality in Google Analytics you can gain clear insight into important metrics about shopper behavior and conversion, including:','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</b></p>
				<div class="row google-analytics-advantages-list">
					<div class="col-sm-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/product_detail_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail views','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</div>
					<div class="col-sm-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/merchandising_tools_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Internal merchandising Success','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</div>
					<div class="col-sm-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/add_to_cart_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'"Add to cart" actions','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</div>
					<div class="col-sm-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/checkout_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The checkout process','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</div>
					<div class="col-sm-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/campaign_clicks_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Internal campaign clicks','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</div>
					<div class="col-sm-6"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/purchase_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'And purchase','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</div>
				</div>
				<div class="google-analytics-create">
					<a href="https://support.google.com/analytics/answer/1008015" rel="external" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create your account to get started','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</a>
				</div>
			</div>
			<div class="col-lg-6 text-center">
					<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/stats.png" class="img-responsive google-analytics-stats" alt="" /><br />
					<span class="small"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchants are able to understand how far along users get in the buying process and where they are dropping off.','d'=>'Modules.Googleanalytics.Admin'),$_smarty_tpl ) );?>
</em></span>
			</div>
		</div>
	</div>
</div>
<?php }
}
