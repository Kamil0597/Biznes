<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ps_checkout.tactician.bus' shared service.

return $this->services['ps_checkout.tactician.bus'] = ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory'] : $this->load('getTacticianCommandBusFactoryService.php')) && false ?: '_'}->create();
