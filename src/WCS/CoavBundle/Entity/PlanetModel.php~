<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanetModel
 */
class PlanetModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var int
     */
    private $cruiseSpeed;

    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $status;


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
     * Set model
     *
     * @param string $model
     * @return PlanetModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return PlanetModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cruiseSpeed
     *
     * @param integer $cruiseSpeed
     * @return PlanetModel
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;

        return $this;
    }

    /**
     * Get cruiseSpeed
     *
     * @return integer 
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * Set nbSeats
     *
     * @param integer $nbSeats
     * @return PlanetModel
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get nbSeats
     *
     * @return integer 
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return PlanetModel
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->id = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add id
     *
     * @param \WCS\CoavBundle\Entity\Flight $id
     * @return PlanetModel
     */
    public function addId(\WCS\CoavBundle\Entity\Flight $id)
    {
        $this->id[] = $id;

        return $this;
    }

    /**
     * Remove id
     *
     * @param \WCS\CoavBundle\Entity\Flight $id
     */
    public function removeId(\WCS\CoavBundle\Entity\Flight $id)
    {
        $this->id->removeElement($id);
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $models;


    /**
     * Add models
     *
     * @param \WCS\CoavBundle\Entity\Flight $models
     * @return PlanetModel
     */
    public function addModel(\WCS\CoavBundle\Entity\Flight $models)
    {
        $this->models[] = $models;

        return $this;
    }

    /**
     * Remove models
     *
     * @param \WCS\CoavBundle\Entity\Flight $models
     */
    public function removeModel(\WCS\CoavBundle\Entity\Flight $models)
    {
        $this->models->removeElement($models);
    }

    /**
     * Get models
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModels()
    {
        return $this->models;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $planes;


    /**
     * Add planes
     *
     * @param \WCS\CoavBundle\Entity\Flight $planes
     * @return PlanetModel
     */
    public function addPlane(\WCS\CoavBundle\Entity\Flight $planes)
    {
        $this->planes[] = $planes;

        return $this;
    }

    /**
     * Remove planes
     *
     * @param \WCS\CoavBundle\Entity\Flight $planes
     */
    public function removePlane(\WCS\CoavBundle\Entity\Flight $planes)
    {
        $this->planes->removeElement($planes);
    }

    /**
     * Get planes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlanes()
    {
        return $this->planes;
    }
}
