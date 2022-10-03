<?php

namespace LarissaStore\FirstTest\Plugins;

class Product
{
    public function afterGetName(\Magento\Catalog\Model\Product $product, $name){
        $price = $product->getData('price');
        if($price < 60){
            $name .= "So cheap PLUGINS";
        }
        else{
            $name .= "So bloody expensive PLUGINS";
        }

        return $name;
    }
}
