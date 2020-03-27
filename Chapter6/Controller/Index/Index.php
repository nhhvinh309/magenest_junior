<?php

namespace Magenest\Chapter6\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    protected $magenestRulesRepository;
    public function __construct(
        Context $context,
        \Magenest\Chapter6\Api\MagenestRulesRepositoryInterface $magenestRulesRepository
    ) {
        $this->magenestRulesRepository = $magenestRulesRepository;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);

        $magenestRule = $this->magenestRulesRepository->getById(124);

        // magenestRules 2 will load by repository
        $magenestRule2 = $this->magenestRulesRepository->getById(124);

        $magenestRule->setBody('ahihi1234');
        $this->magenestRulesRepository->save($magenestRule);
        return $resultJson->setData(['data' => $magenestRule->getData()]);
    }
}