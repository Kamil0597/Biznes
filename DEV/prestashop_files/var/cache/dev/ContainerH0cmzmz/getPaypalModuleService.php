<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\PaypalModule'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->load('getPayPalConfigurationService.php')) && false ?: '_'});
