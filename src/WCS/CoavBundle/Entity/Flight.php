<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 */
class Flight
{
//    Public function __toString()
//    {
//        return $this->departure;
//    }

    // YAML GENERATED CODE

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $flights;

    /**
     * @var \WCS\CoavBundle\Entity\PlanetModel
     */
    private $plane;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->flights = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add flights
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flights
     * @return Flight
     */
    public function addFlight(\WCS\CoavBundle\Entity\Reservation $flights)
    {
        $this->flights[] = $flights;
        return $this;
    }
    /**
     * Remove flights
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flights
     */
    public function removeFlight(\WCS\CoavBundle\Entity\Reservation $flights)
    {
        $this->flights->removeElement($flights);
    }
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
    private $reservations;


    /**
     * Add reservations
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservations
     * @return Flight
     */
    public function addReservation(\WCS\CoavBundle\Entity\Reservation $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservations
     */
    public function removeReservation(\WCS\CoavBundle\Entity\Reservation $reservations)
    {
        $this->reservations->removeElement($reservations);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }
}








//
//    /**
//     * @var \Doctrine\Common\Collections\Collection
//     */
//    private $flight;


//    /**
//     * Add flight
//     *
//     * @param \WCS\CoavBundle\Entity\Reservation $flight
//     * @return Flight
//     */
//    public function addFlight(\WCS\CoavBundle\Entity\Reservation $flight)
//    {
//        $this->flight[] = $flight;
//
//        return $this;
//    }
//
//    /**
//     * Remove flight
//     *
//     * @param \WCS\CoavBundle\Entity\Reservation $flight
//     */
//    public function removeFlight(\WCS\CoavBundle\Entity\Reservation $flight)
//    {
//        $this->flight->removeElement($flight);
//    }
//
//    /**
//     * Get flight
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getFlight()
//    {
//        return $this->flight;
//    }
