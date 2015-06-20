<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametrs
 */
class Parametrs
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;


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
     * @return Parametrs
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $param;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->param = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add param
     *
     * @param \Bundles\StoreBundle\Entity\Category $param
     * @return Parametrs
     */
    public function addParam(\Bundles\StoreBundle\Entity\Category $param)
    {
        $this->param[] = $param;

        return $this;
    }

    /**
     * Remove param
     *
     * @param \Bundles\StoreBundle\Entity\Category $param
     */
    public function removeParam(\Bundles\StoreBundle\Entity\Category $param)
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $valparam;


    /**
     * Add valparam
     *
     * @param \Bundles\StoreBundle\Entity\ValParam $valparam
     * @return Parametrs
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
    private $category;


    /**
     * Add category
     *
     * @param \Bundles\StoreBundle\Entity\Category $category
     * @return Parametrs
     */
    public function addCategory(\Bundles\StoreBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Bundles\StoreBundle\Entity\Category $category
     */
    public function removeCategory(\Bundles\StoreBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
