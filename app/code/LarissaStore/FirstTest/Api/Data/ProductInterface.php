<?php
/** @package mage2... */

namespace LarissaStore\FirstTest\Api\Data;

interface ProductInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku($sku);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getPrice();

    /**
     * @param string $price
     * @return $this
     */
    public function setPrice($price);

    /**
     * @return string[]
     */
    public function getImages();

    /**
     * @param string[] productImagesArray
     * @return $this
     */
    public function setImages($productImagesArray);
}
