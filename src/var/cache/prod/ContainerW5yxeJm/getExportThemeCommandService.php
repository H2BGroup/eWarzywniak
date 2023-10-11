<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Command\ExportThemeCommand' shared service.

return $this->services['PrestaShopBundle\\Command\\ExportThemeCommand'] = new \PrestaShopBundle\Command\ExportThemeCommand(($this->services['prestashop.core.addon.theme.repository'] ?? $this->load('getPrestashop_Core_Addon_Theme_RepositoryService.php')), ($this->services['prestashop.core.addon.theme.exporter'] ?? $this->load('getPrestashop_Core_Addon_Theme_ExporterService.php')), ($this->services['translator'] ?? $this->getTranslatorService()));