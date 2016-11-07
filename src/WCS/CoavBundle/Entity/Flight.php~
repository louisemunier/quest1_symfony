<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 */
class Flight
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $departure;

    /**
     * @var string
     */
    private $arrival;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var int
     */
    private $freeSeats;

    /**
     * @var \DateTime
     */
    private $takeofTime;


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
     * Set departure
     *
     * @param string $departure
     * @return Flight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string 
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     * @return Flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string 
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string 
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeats
     *
     * @param integer $freeSeats
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return integer 
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set takeofTime
     *
     * @param \DateTime $takeofTime
     * @return Flight
     */
    public function setTakeofTime($takeofTime)
    {
        $this->takeofTime = $takeofTime;

        return $this;
    }

    /**
     * Get takeofTime
     *
     * @return \DateTime 
     */
    public function getTakeofTime()
    {
        return $this->takeofTime;
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
     * @param \WCS\CoavBundle\Entity\Reservation $id
     * @return Flight
     */
    public function addId(\WCS\CoavBundle\Entity\Reservation $id)
    {
        $this->id[] = $id;

        return $this;
    }

    /**
     * Remove id
     *
     * @param \WCS\CoavBundle\Entity\Reservation $id
     */
    public function removeId(\WCS\CoavBundle\Entity\Reservation $id)
    {
        $this->id->removeElement($id);
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $flight;

    /**
     * @var \WCS\CoavBundle\Entity\PlanetModel
     */
    private $plane;


    /**
     * Add flight
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flight
     * @return Flight
     */
    public function addFlight(\WCS\CoavBundle\Entity\Reservation $flight)
    {
        $this->flight[] = $flight;

        return $this;
    }

    /**
     * Remove flight
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flight
     */
    public function removeFlight(\WCS\CoavBundle\Entity\Reservation $flight)
    {
        $this->flight->removeElement($flight);
    }

    /**
     * Get flight
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Set plane
     *
     * @param \WCS\CoavBundle\Entity\PlanetModel $plane
     * @return Flight
     */
    public function setPlane(\WCS\CoavBundle\Entity\PlanetModel $plane = null)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return \WCS\CoavBundle\Entity\PlanetModel 
     */
    public function getPlane()
    {
        return $this->plane;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $flights;


    /**
     * Get flights
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFlights()
    {
        return $this->flights;
    }
    /**
     * @var \WCS\CoavBundle\Entity\PlanetModel
     */
    private $models;


    /**
     * Set models
     *
     * @param \WCS\CoavBundle\Entity\PlanetModel $models
     * @return Flight
     */
    public function setModels(\WCS\CoavBundle\Entity\PlanetModel $models = null)
    {
        $this->models = $models;

        return $this;
    }

    /**
     * Get models
     *
     * @return \WCS\CoavBundle\Entity\PlanetModel 
     */
    public function getModels()
    {
        return $this->models;
    }
}
