<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Repository\PaymentTokenRepository' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PaymentTokenRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->load('getPsCheckout_DbService.php')) && false ?: '_'});
