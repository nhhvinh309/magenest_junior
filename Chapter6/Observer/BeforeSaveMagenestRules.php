<?php

namespace Magenest\Chapter6\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magenest\Chapter6\Api\MagenestRulesRepositoryInterface;

class BeforeSaveMagenestRules implements ObserverInterface
{
    protected $magenestRulesRepository;
    private $isProcessed = false;
    private $logger;

    public function __construct(
        MagenestRulesRepositoryInterface $magenestRulesRepository,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->magenestRulesRepository = $magenestRulesRepository;
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        if (!$this->isProcessed) {
            $magenestRule = $this->magenestRulesRepository->getById(124);
            $magenestRule->setBody("ahahaha");
            try {
                $this->isProcessed = true;
                $this->magenestRulesRepository->save($magenestRule);
            } catch (\Exception $e) {
                $this->logger->critical($e->getMessage());
                $this->isProcessed = false;
            }
        }
        return;
    }
}