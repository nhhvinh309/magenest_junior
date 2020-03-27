<?php

namespace Magenest\Chapter6\Model;

use Magento\Framework\Model\AbstractModel;
use Magenest\Chapter6\Api\Data\MagenestRulesInterface;

class MagenestRules extends AbstractModel implements MagenestRulesInterface
{
    protected $_eventPrefix = 'magenest_rules';
    protected function _construct()
    {
        $this->_init(\Magenest\Chapter6\Model\ResourceModel\MagenestRules::class);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getBody()
    {
       return $this->getData(self::BODY);
    }

    /**
     * @inheritDoc
     */
    public function setBody($body)
    {
        $this->setData(self::BODY, $body);
    }
}