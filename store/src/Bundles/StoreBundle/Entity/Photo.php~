<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 */
class Photo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $adres;

    /**
     * @var integer
     */
    private $productId;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adres
     *
     * @param string $adres
     * @return Photo
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string 
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return Photo
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }
    /**
     * @var \Bundles\StoreBundle\Entity\Product
     */
    private $product;


    /**
     * Set product
     *
     * @param \Bundles\StoreBundle\Entity\Product $product
     * @return Photo
     */
    public function setProduct(\Bundles\StoreBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Bundles\StoreBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
