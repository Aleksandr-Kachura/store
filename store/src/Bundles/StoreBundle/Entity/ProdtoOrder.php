<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdtoOrder
 */
class ProdtoOrder
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $quantity;


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
     * Set productId
     *
     * @param integer $productId
     * @return ProdtoOrder
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
     * Set orderId
     *
     * @param integer $orderId
     * @return ProdtoOrder
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return ProdtoOrder
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return ProdtoOrder
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * @var \Bundles\StoreBundle\Entity\Product
     */
    private $product;

    /**
     * @var \Bundles\StoreBundle\Entity\Orders
     */
    private $orders;


    /**
     * Set product
     *
     * @param \Bundles\StoreBundle\Entity\Product $product
     * @return ProdtoOrder
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
     * Set orders
     *
     * @param \Bundles\StoreBundle\Entity\Orders $orders
     * @return ProdtoOrder
     */
    public function setOrders(\Bundles\StoreBundle\Entity\Orders $orders = null)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return \Bundles\StoreBundle\Entity\Orders 
     */
    public function getOrders()
    {
        return $this->orders;
    }
}
