<?php
declare(strict_types=1);

namespace Reservation;

/**
 * Class Room
 * @package Reservation
 */
class Room implements ReservableInterface
{
    /**
     * @var
     */
    private $roomType;
    /**
     * @var
     */
    private $hasRestroom;
    /**
     * @var
     */
    private $hasBalcony;
    /**
     * @var
     */
    private $bedCount;
    /**
     * @var
     */
    private $roomNumber;
    /**
     * @var
     */
    private $extras;
    /**
     * @var
     */
    private $price;
    /**
     * @var array
     */
    private $reservations = [];

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "<strong>" . $this->roomNumber . "</strong>";
    }

    /**
     * @param Reservation $reservation
     * @throws ReservationException
     */
    public function addReservation(Reservation $reservation): void
    {
        if(!(BookManager::checkIfRoomIsAvailable($this->getReservations(), $reservation))){
            throw new ReservationException('Room is not valid for that period of time');
        } else {
            $this->reservations[] = $reservation;
        }
    }

    /**
     * @param Reservation $reservation
     */
    public function removeReservation(Reservation $reservation): void
    {
    }

    /**
     * @return mixed
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }


    /**
     * @return string
     */
    public function getRoomType(): string
    {
        return $this->roomType;
    }


    /**
     * @param string $roomType
     */
    public function setRoomType(string $roomType): void
    {
        $this->roomType = $roomType;
    }


    /**
     * @return bool
     */
    public function getHasRestroom(): bool
    {
        return $this->hasRestroom;
    }


    /**
     * @param bool $hasRestroom
     */
    public function setHasRestroom(bool $hasRestroom): void
    {
        $this->hasRestroom = $hasRestroom;
    }


    /**
     * @return bool
     */
    public function getHasBalcony(): bool
    {
        return $this->hasBalcony;
    }


    /**
     * @param bool $hasBalcony
     */
    public function setHasBalcony(bool $hasBalcony): void
    {
        $this->hasBalcony = $hasBalcony;
    }

    /**
     * @return int
     */
    public function getBedCount(): int
    {
        return $this->bedCount;
    }


    /**
     * @param int $bedCount
     */
    public function setBedCount(int $bedCount): void
    {
        $this->bedCount = $bedCount;
    }


    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }


    /**
     * @param int $roomNumber
     */
    public function setRoomNumber(int $roomNumber): void
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return string
     */
    public function getExtras(): string
    {
        return $this->extras;
    }

    /**
     * @param string $extras
     */
    public function setExtras(string $extras): void
    {
        $this->extras = $extras;
    }


}