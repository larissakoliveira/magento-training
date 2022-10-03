<?php


namespace LarissaStore\FirstTest\Model\ResourceModel\Hero;


use LarissaStore\FirstTest\Model\Hero;
use LarissaStore\FirstTest\Model\ResourceModel\Hero as HeroResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Hero::class, HeroResourceModel::class);
    }
}
