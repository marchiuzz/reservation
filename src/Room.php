<?php
declare(strict_types=1);

namespace Reservation;

class Room implements ReservableInterface
{
    private $roomType;
    private $hasRestroom;
    private $hasBalcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $price;
    private $reservations = [];

    public function addReservation(Reservation $reservation): void
    {
        $this->reservations[] = $reservation;
    }

    public function removeReservation(Reservation $reservation): void
    {
        $this->reservations = \array_diff($this->reservations, ["a", "c"]);
    }

    public function __toString(): string
    {
        return "Room <strong>" . $this->roomNumber . "</strong>";
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


    public function getRoomType(): string
    {
        return $this->roomType;
    }


    public function setRoomType(string $roomType): void
    {
        $this->roomType = $roomType;
    }


    public function getHasRestroom(): bool
    {
        return $this->hasRestroom;
    }


    public function setHasRestroom(bool $hasRestroom): void
    {
        $this->hasRestroom = $hasRestroom;
    }


    public function getHasBalcony(): bool
    {
        return $this->hasBalcony;
    }


    public function setHasBalcony(bool $hasBalcony): void
    {
        $this->hasBalcony = $hasBalcony;
    }

    public function getBedCount(): int
    {
        return $this->bedCount;
    }


    public function setBedCount(int $bedCount): void
    {
        $this->bedCount = $bedCount;
    }


    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }


    public function setRoomNumber(int $roomNumber): void
    {
        $this->roomNumber = $roomNumber;
    }

    public function getExtras(): string
    {
        return $this->extras;
    }

    public function setExtras(string $extras): void
    {
        $this->extras = $extras;
    }

}