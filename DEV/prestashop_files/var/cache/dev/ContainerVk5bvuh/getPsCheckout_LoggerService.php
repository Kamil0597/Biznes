<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.logger' shared service.

return $this->services['ps_checkout.logger'] = ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory'] : $this->load('getLoggerFactoryService.php')) && false ?: '_'}->build(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.8.11', $this->targetDirs[3]))) && false ?: '_'});
