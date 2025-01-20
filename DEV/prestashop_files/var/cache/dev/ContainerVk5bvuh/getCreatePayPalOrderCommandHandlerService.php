<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CreatePayPalOrderCommandHandler' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CreatePayPalOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CreatePayPalOrderCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] : $this->load('getMaaslandHttpClientService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] : $this->load('getShopContextService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] : $this->load('getSymfonyEventDispatcherAdapterService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] : $this->load('getPayPalCustomerRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] : $this->load('getPaymentTokenRepositoryService.php')) && false ?: '_'});
