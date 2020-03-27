<?php

namespace Magenest\Chapter6\Setup\Patch\Schema;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class AddColumn implements  SchemaPatchInterface
{
    protected $setup;
    public function __construct(ModuleDataSetupInterface $setup)
    {
        $this->setup = $setup;
    }

    public function apply()
    {
        $this->setup->startSetup();
        $this->setup->getConnection()->addColumn(
            $this->setup->getTable('magenest_rules'),
            'custom',
            [
                'type' => Table::TYPE_TEXT,
                'length' => 255,
                'nullable' => true,
                'comment' => 'Custom'
            ]
        );
    }
    public static function getDependencies()
    {
        // TODO: Implement getDependencies() method.
    }
    public function getAliases()
    {
        // TODO: Implement getAliases() method.
    }
}