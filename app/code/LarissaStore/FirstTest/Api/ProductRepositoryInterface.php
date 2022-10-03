<?php
/** @package mage2 */

namespace LarissaStore\FirstTest\Api;

use Magento\Framework\Exception\NoSuchEntityException;

/**
 * LarissaStore Api to get Product by Id
 */

interface ProductRepositoryInterface
{
    /**
     * Get Product by Id
     *
     * @param int $id
     * @return \LarissaStore\FirstTest\Api\Data\ProductInterface
     * @throws NoSuchEntityException
     */
    public function getProductById($id);
}
