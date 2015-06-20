<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
class Orders
{

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prodtorder = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setDate(new \DateTime());
    }



    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $date;


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
     * Set userId
     *
     * @param integer $userId
     * @return Orders
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Orders
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $prodtorder;



    /**
     * Add prodtorder
     *
     * @param \Bundles\StoreBundle\Entity\ProdtoOrder $prodtorder
     * @return Orders
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
     * @var \Bundles\StoreBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Bundles\StoreBundle\Entity\User $user
     * @return Orders
     */
    public function setUser(\Bundles\StoreBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Bundles\StoreBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
