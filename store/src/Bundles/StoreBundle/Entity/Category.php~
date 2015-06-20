<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{

    function __toString()
    {
        return $this->name?$this->name:"Category";
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var integer
     */
    private $parentId;


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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Category
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return Category
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $product;

    /**
     * @var \Bundles\StoreBundle\Entity\Category
     */
    private $parent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add children
     *
     * @param \Bundles\StoreBundle\Entity\Category $children
     * @return Category
     */
    public function addChild(\Bundles\StoreBundle\Entity\Category $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \Bundles\StoreBundle\Entity\Category $children
     */
    public function removeChild(\Bundles\StoreBundle\Entity\Category $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Add product
     *
     * @param \Bundles\StoreBundle\Entity\Product $product
     * @return Category
     */
    public function addProduct(\Bundles\StoreBundle\Entity\Product $product)
    {
        $this->product[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \Bundles\StoreBundle\Entity\Product $product
     */
    public function removeProduct(\Bundles\StoreBundle\Entity\Product $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set parent
     *
     * @param \Bundles\StoreBundle\Entity\Category $parent
     * @return Category
     */
    public function setParent(\Bundles\StoreBundle\Entity\Category $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Bundles\StoreBundle\Entity\Category 
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $param;


    /**
     * Add param
     *
     * @param \Bundles\StoreBundle\Entity\Parametrs $param
     * @return Category
     */
    public function addParam(\Bundles\StoreBundle\Entity\Parametrs $param)
    {
        $this->param[] = $param;

        return $this;
    }

    /**
     * Remove param
     *
     * @param \Bundles\StoreBundle\Entity\Parametrs $param
     */
    public function removeParam(\Bundles\StoreBundle\Entity\Parametrs $param)
    {
        $this->param->removeElement($param);
    }

    /**
     * Get param
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParam()
    {
        return $this->param;
    }
}
