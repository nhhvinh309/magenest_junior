<?php

namespace Magenest\Chapter6\Api;
interface MagenestRulesRepositoryInterface
{
    /**
     * @param $id
     * @return \Magenest\Chapter6\Api\Data\MagenestRulesInterface
     */
    public function getById($id);

    /**
     * @param \Magenest\Chapter6\Api\Data\MagenestRulesInterface $magenestRules
     * @return \Magenest\Chapter6\Api\Data\MagenestRulesInterface
     */
    public function save(\Magenest\Chapter6\Api\Data\MagenestRulesInterface $magenestRules);

    /**
     * @param \Magenest\Chapter6\Api\Data\MagenestRulesInterface $magenestRules
     * @return \Magenest\Chapter6\Api\Data\MagenestRulesInterface
     */
    public function delete(\Magenest\Chapter6\Api\Data\MagenestRulesInterface $magenestRules);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return mixed
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}