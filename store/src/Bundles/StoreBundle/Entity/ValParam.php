<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValParam
 */
class ValParam
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $value;


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
     * Set value
     *
     * @param string $value
     * @return ValParam
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * Set productId
     *
     * @param integer $productId
     * @return ValParam
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
     * @var \Bundles\StoreBundle\Entity\Parametrs
     */
    private $parametrs;


    /**
     * Set product
     *
     * @param \Bundles\StoreBundle\Entity\Product $product
     * @return ValParam
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

    /**
     * Set parametrs
     *
     * @param \Bundles\StoreBundle\Entity\Parametrs $parametrs
     * @return ValParam
     */
    public function setParametrs(\Bundles\StoreBundle\Entity\Parametrs $parametrs = null)
    {
        $this->parametrs = $parametrs;

        return $this;
    }

    /**
     * Get parametrs
     *
     * @return \Bundles\StoreBundle\Entity\Parametrs 
     */
    public function getParametrs()
    {
        return $this->parametrs;
    }
}
