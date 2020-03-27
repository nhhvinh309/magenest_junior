<?php

namespace Magenest\Chapter6\Model\ResourceModel;

use Magento\Framework\Exception\NoSuchEntityException;
use Magenest\Chapter6\Api\MagenestRulesRepositoryInterface;

class MagenestRulesRepository implements MagenestRulesRepositoryInterface
{
    protected $magenestRulesFactory;
    protected $magenestRulesResourceModel;
    private $magenestRulesRegistryId = [];
    public function __construct(
        \Magenest\Chapter6\Model\MagenestRulesFactory $magenestRulesFactory,
        \Magenest\Chapter6\Model\ResourceModel\MagenestRules $magenestRulesResourceModel
    ) {
        $this->magenestRulesFactory = $magenestRulesFactory;
        $this->magenestRulesResourceModel = $magenestRulesResourceModel;
    }

    /**
     * @param $id
     * @return \Magenest\Chapter6\Api\Data\MagenestRulesInterface|MagenestRules
     * @throws NoSuchEntityException
     */
    public function getById($id)
    {
        if(isset($this->magenestRulesRegistryId[$id]))
        {
            return $this->magenestRulesRegistryId[$id];
        }
        $magenestRule = $this->magenestRulesFactory->create()->load($id);
        if (!$magenestRule->getId()) {
            // magenestrules does not exist
            throw NoSuchEntityException::singleField('id', $id);
        } else {
            $this->magenestRulesRegistryId[$id] = $magenestRule;
            return $magenestRule;
        }
    }

    /**
     * @param \Magenest\Chapter6\Api\Data\MagenestRulesInterface $magenestRules
     * @return \Magenest\Chapter6\Api\Data\MagenestRulesInterface|MagenestRules
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function save(\Magenest\Chapter6\Api\Data\MagenestRulesInterface $magenestRules)
    {

        return $this->magenestRulesResourceModel->save($magenestRules);
    }

    /**
     * @param \Magenest\Chapter6\Api\Data\MagenestRulesInterface $magenestRules
     * @return \Magenest\Chapter6\Api\Data\MagenestRulesInterface|MagenestRules
     * @throws \Exception
     */
    public function delete(\Magenest\Chapter6\Api\Data\MagenestRulesInterface $magenestRules)
    {
        return $this->magenestRulesResourceModel->delete($magenestRules);
    }

    /**
     * @inheritDoc
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement getList() method.
    }
}