<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.combination.query_handler.get_combination_for_editing_handler' shared service.

return $this->services['prestashop.adapter.product.combination.query_handler.get_combination_for_editing_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler\GetCombinationForEditingHandler(${($_ = isset($this->services['prestashop.adapter.product.combination.repository.combination_repository']) ? $this->services['prestashop.adapter.product.combination.repository.combination_repository'] : $this->load('getPrestashop_Adapter_Product_Combination_Repository_CombinationRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.product.stock.repository.stock_available_repository']) ? $this->services['prestashop.adapter.product.stock.repository.stock_available_repository'] : $this->load('getPrestashop_Adapter_Product_Stock_Repository_StockAvailableRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.attribute.repository.attribute_repository']) ? $this->services['prestashop.adapter.attribute.repository.attribute_repository'] : $this->load('getPrestashop_Adapter_Attribute_Repository_AttributeRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.product.repository.product_repository']) ? $this->services['prestashop.adapter.product.repository.product_repository'] : $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.product.image.repository.product_image_repository']) ? $this->services['prestashop.adapter.product.image.repository.product_image_repository'] : $this->load('getPrestashop_Adapter_Product_Image_Repository_ProductImageRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.util.number.number_extractor']) ? $this->services['prestashop.core.util.number.number_extractor'] : $this->load('getPrestashop_Core_Util_Number_NumberExtractorService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.tax.tax_computer']) ? $this->services['prestashop.adapter.tax.tax_computer'] : $this->load('getPrestashop_Adapter_Tax_TaxComputerService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->id, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->getInt("PS_COUNTRY_DEFAULT"));
