<?php
/**
 * Created by PhpStorm.
 * User: thomasnordkvist
 * Date: 16-03-30
 * Time: 08:26
 */

namespace FiveStones\Catalog\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * @api
 */
interface CategoryRepositoryInterface
{
    /**
     * Get category list
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \FiveStones\Catalog\Api\Data\CategorySearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}