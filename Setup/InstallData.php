<?php
/**
 * Copyright 2019 Printful. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Printful\Integration\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Integration\Model\ConfigBasedIntegrationManager;

class InstallData implements InstallDataInterface
{
    /**
     * @var ConfigBasedIntegrationManager
     */
    private $integrationManager;

    /**
     * InstallData constructor.
     * @param ConfigBasedIntegrationManager $integrationManager
     */
    public function __construct(
        ConfigBasedIntegrationManager $integrationManager
    ) {
        $this->integrationManager = $integrationManager;
    }


    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->integrationManager->processIntegrationConfig(['PrintfulIntegration']);
    }
}