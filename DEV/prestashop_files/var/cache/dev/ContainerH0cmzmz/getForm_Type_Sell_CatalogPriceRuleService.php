<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.catalog_price_rule' shared service.

return $this->services['form.type.sell.catalog_price_rule'] = new \PrestaShopBundle\Form\Admin\Sell\CatalogPriceRule\CatalogPriceRuleType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.multistore_feature']) ? $this->services['prestashop.adapter.multistore_feature'] : $this->getPrestashop_Adapter_MultistoreFeatureService()) && false ?: '_'}->isUsed(), ${($_ = isset($this->services['prestashop.core.form.choice_provider.currency_by_id']) ? $this->services['prestashop.core.form.choice_provider.currency_by_id'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_CurrencyByIdService.php')) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.core.form.choice_provider.country_by_id']) ? $this->services['prestashop.core.form.choice_provider.country_by_id'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_CountryByIdService.php')) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.core.form.choice_provider.group_by_id']) ? $this->services['prestashop.core.form.choice_provider.group_by_id'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_GroupByIdService.php')) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.adapter.form.choice_provider.shop_name_by_id']) ? $this->services['prestashop.adapter.form.choice_provider.shop_name_by_id'] : ($this->services['prestashop.adapter.form.choice_provider.shop_name_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\ShopNameByIdChoiceProvider())) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.core.form.choice_provider.tax_inclusion']) ? $this->services['prestashop.core.form.choice_provider.tax_inclusion'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_TaxInclusionService.php')) && false ?: '_'}->getChoices());
