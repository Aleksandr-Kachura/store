<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var integer
     */
    private $brendId;


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
     * Set title
     *
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Product
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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Product
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set brendId
     *
     * @param integer $brendId
     * @return Product
     */
    public function setBrendId($brendId)
    {
        $this->brendId = $brendId;

        return $this;
    }

    /**
     * Get brendId
     *
     * @return integer 
     */
    public function getBrendId()
    {
        return $this->brendId;
    }
    /**
     * @var \Bundles\StoreBundle\Entity\Category
     */
    private $category;


    /**
     * Set category
     *
     * @param \Bundles\StoreBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\Bundles\StoreBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Bundles\StoreBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \Bundles\StoreBundle\Entity\Brend
     */
    private $brend;


    /**
     * Set brend
     *
     * @param \Bundles\StoreBundle\Entity\Brend $brend
     * @return Product
     */
    public function setBrend(\Bundles\StoreBundle\Entity\Brend $brend = null)
    {
        $this->brend = $brend;

        return $this;
    }

    /**
     * Get brend
     *
     * @return \Bundles\StoreBundle\Entity\Brend 
     */
    public function getBrend()
    {
        return $this->brend;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $photo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add photo
     *
     * @param \Bundles\StoreBundle\Entity\Photo $photo
     * @return Product
     */
    public function addPhoto(\Bundles\StoreBundle\Entity\Photo $photo)
    {
        $this->photo[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \Bundles\StoreBundle\Entity\Photo $photo
     */
    public function removePhoto(\Bundles\StoreBundle\Entity\Photo $photo)
    {
        $this->photo->removeElement($photo);
    }

    /**
     * Get photo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $valparam;


    /**
     * Add valparam
     *
     * @param \Bundles\StoreBundle\Entity\ValParam $valparam
     * @return Product
     */
    public function addValparam(\Bundles\StoreBundle\Entity\ValParam $valparam)
    {
        $this->valparam[] = $valparam;

        return $this;
    }

    /**
     * Remove valparam
     *
     * @param \Bundles\StoreBundle\Entity\ValParam $valparam
     */
    public function removeValparam(\Bundles\StoreBundle\Entity\ValParam $valparam)
    {
        $this->valparam->removeElement($valparam);
    }

    /**
     * Get valparam
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getValparam()
    {
        return $this->valparam;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $prodtorder;


    /**
     * Add prodtorder
     *
     * @param \Bundles\StoreBundle\Entity\ProdtoOrder $prodtorder
     * @return Product
     */
    public function addProdtorder(\Bundles\StoreBundle\Entity\ProdtoOrder $prodtorder)
    {
        $this->prodtorder[] = $prodtorder;

        return $this;
    }

    /**
     * Remove prodtorder
     *
     * @param \Bundles\StoreBundle\Entity\ProdtoOrder $prodtorder
     */
    public function removeProdtorder(\Bundles\StoreBundle\Entity\ProdtoOrder $prodtorder)
    {
        $this->prodtorder->removeElement($prodtorder);
    }

    /**
     * Get prodtorder
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProdtorder()
    {
        return $this->prodtorder;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comment;


    /**
     * Add comment
     *
     * @param \Bundles\StoreBundle\Entity\Comment $comment
     * @return Product
     */
    public function addComment(\Bundles\StoreBundle\Entity\Comment $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \Bundles\StoreBundle\Entity\Comment $comment
     */
    public function removeComment(\Bundles\StoreBundle\Entity\Comment $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
