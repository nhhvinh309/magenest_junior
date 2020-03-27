<?php

namespace Magenest\Chapter6\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface MagenestRulesInterface extends ExtensibleDataInterface
{
    const NAME = 'name';
    const STATUS = 'status';
    const BODY = 'body';
    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return mixed
     */
    public function getBody();

    /**
     * @param $body
     * @return $this
     */
    public function setBody($body);

}