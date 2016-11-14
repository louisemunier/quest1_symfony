<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var int
     */
    private $flight;


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
     * Get flight
     *
     * @return integer
     */
    public function getFlight()
    {
        return $this->flight;
    }
    
    /**
     * Set flight
     *
     * @param string $flight
     * @return Reservation
     */
    public function setFlight($flight)
    {
        $this->flight = $flight;

        return $this;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Reservation
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
     * Set nbSeats
     *
     * @param integer $nbSeats
     * @return Reservation
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $passengers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->passengers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add passengers
     *
     * @param \WCS\CoavBundle\Entity\User $passengers
     * @return Reservation
     */
    public function addPassenger(\WCS\CoavBundle\Entity\User $passengers)
    {
        $this->passengers[] = $passengers;

        return $this;
    }

    /**
     * Remove passengers
     *
     * @param \WCS\CoavBundle\Entity\User $passengers
     */
    public function removePassenger(\WCS\CoavBundle\Entity\User $passengers)
    {
        $this->passengers->removeElement($passengers);
    }

    /**
     * Get passengers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

//    /**
//     * @var \WCS\CoavBundle\Entity\Flight
//     */
//    private $flight;


//    /**
//     * Set flight
//     *
//     * @param \WCS\CoavBundle\Entity\Flight $flight
//     * @return Reservation
//     */
//    public function setFlight(\WCS\CoavBundle\Entity\Flight $flight = null)
//    {
//        $this->flight = $flight;
//
//        return $this;
//    }
//
//    /**
//     * Get flight
//     *
//     * @return \WCS\CoavBundle\Entity\Flight
//     */
//    public function getFlight()
//    {
//        return $this->flight;
//    }

    /**
     * @var \WCS\CoavBundle\Entity\Flight
     */
    private $reservation;


    /**
     * Set reservation
     *
     * @param \WCS\CoavBundle\Entity\Flight $reservation
     * @return Reservation
     */
    public function setReservation(\WCS\CoavBundle\Entity\Flight $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \WCS\CoavBundle\Entity\Flight 
     */
    public function getReservation()
    {
        return $this->reservation;
    }
}
