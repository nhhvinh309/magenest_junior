<?php

namespace Magenest\Chapter6\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class MagenestRules extends AbstractDb
{
    /**
     * @inheritDoc
     */

    protected function _construct()
    {
        $this->_init('magenest_rules', 'id');
    }
}