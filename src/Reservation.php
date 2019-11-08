<?php
declare(strict_types=1);

namespace Reservation;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;


    public function __construct(\DateTime $startDate, \DateTime $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    public function __toString(): string
    {
        $startTimeString = $this->startDate->format('Y-m-d');
        $endTimeString = $this->endDate->format('Y-m-d');
        return $this->guest." from <time>".$startTimeString."</time> to <time>".$endTimeString."</time>";
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }

    /**
     * @param Guest $guest
     */
    public function setGuest(Guest $guest): void
    {
        $this->guest = $guest;
    }








}