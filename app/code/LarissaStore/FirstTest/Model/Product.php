<?php

namespace LarissaStore\FirstTest\Model;

class Product extends \Magento\Catalog\Model\Product
{
    public function getName()
    {
        $name = parent::getName();

        $price = $this->getData('price');
        if($price < 60){
            $name .= " So cheap PREFERENCE";
        }
        else{
            $name .= "So bloody expensive PREFERENCE";
        }

        return $name;
    }
}
