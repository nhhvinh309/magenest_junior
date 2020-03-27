<?php

namespace Magenest\Chapter6\Model\ResourceModel\MagenestRules;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\Magenest\Chapter6\Model\MagenestRules::class, \Magenest\Chapter6\Model\ResourceModel\MagenestRules::class);
    }

}