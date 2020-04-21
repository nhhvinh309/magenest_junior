<?php

namespace Magenest\Chapter7\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Stdlib\DateTime\DateTime;

class CheckOutCartProductAddBefore implements ObserverInterface
{
    protected $date;
    public function __construct(
        DateTime $date
    ) {
        $this->date = $date;
    }

    public function execute(Observer $observer)
    {
        $data = $observer->getData();
        $timeStamp = $this->date->gmtTimestamp();
    }
}