<?php
declare(strict_types=1);

namespace Reservation;


class BookManager
{
    public static function bookRoom(Room $room, Reservation $reservation): void
    {
        $room->addReservation($reservation);
        //echo "Room ".$room." successfully booked for ".$reservation;
    }
}