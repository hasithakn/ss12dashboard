<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2017-07-28
 * Time: 1:05 AM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="deviceData")
 */
class DeviceData
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $compartmentId;

    /**
     * @ORM\Column(type="bigint", length=14 )
     */
    private $timeStamp;
    /**
     * @ORM\Column(type="float", length=10 )
     */
    private $temp;
    /**
     * @ORM\Column(type="float", length=10 )
     */
    private $humid;
    /**
     * @ORM\Column(type="float", length=10 )
     */
    private $foodStatus;


    /**
     * Set compartmentId
     *
     * @param string $compartmentId
     * @return DeviceData
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
     * Set timeStamp
     *
     * @param integer $timeStamp
     * @return DeviceData
     */
    public function setTimeStamp($timeStamp)
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * Get timeStamp
     *
     * @return integer 
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * Set temp
     *
     * @param float $temp
     * @return DeviceData
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return float 
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set humid
     *
     * @param float $humid
     * @return DeviceData
     */
    public function setHumid($humid)
    {
        $this->humid = $humid;

        return $this;
    }

    /**
     * Get humid
     *
     * @return float 
     */
    public function getHumid()
    {
        return $this->humid;
    }

    /**
     * Set foodStatus
     *
     * @param float $foodStatus
     * @return DeviceData
     */
    public function setFoodStatus($foodStatus)
    {
        $this->foodStatus = $foodStatus;

        return $this;
    }

    /**
     * Get foodStatus
     *
     * @return float 
     */
    public function getFoodStatus()
    {
        return $this->foodStatus;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
