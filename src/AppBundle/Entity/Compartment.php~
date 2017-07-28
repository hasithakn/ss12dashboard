<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2017-07-27
 * Time: 4:46 PM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="compartment")
 */
class Compartment
{
    /**
     * @ORM\Column(type="string", length=100 , unique=true)
     * @ORM\Id
     */
    private $compartmentId;
    /**
     * @ORM\Column(type="string", length=200 )
     */
    private $item;
    /**
     * @ORM\Column(type="date")
     */
    private $expireDate;
    /**
     * @ORM\Column(type="date")
     */
    private $storeDate;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="email",referencedColumnName="email")
     */
    private $email;


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
     * Set compartmentId
     *
     * @param string $compartmentId
     * @return Compartment
     */
    public function setCompartmentId($compartmentId)
    {
        $this->compartmentId = $compartmentId;

        return $this;
    }

    /**
     * Get compartmentId
     *
     * @return string 
     */
    public function getCompartmentId()
    {
        return $this->compartmentId;
    }

    /**
     * Set item
     *
     * @param string $item
     * @return Compartment
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return string 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     * @return Compartment
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime 
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set storeDate
     *
     * @param \DateTime $storeDate
     * @return Compartment
     */
    public function setStoreDate($storeDate)
    {
        $this->storeDate = $storeDate;

        return $this;
    }

    /**
     * Get storeDate
     *
     * @return \DateTime 
     */
    public function getStoreDate()
    {
        return $this->storeDate;
    }

    /**
     * Set email
     *
     * @param \AppBundle\Entity\User $email
     * @return Compartment
     */
    public function setEmail(\AppBundle\Entity\User $email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return \AppBundle\Entity\User 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
