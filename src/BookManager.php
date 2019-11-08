<?php
declare(strict_types=1);

namespace Reservation;


class BookManager
{
    public static function bookRoom(Room $room, Reservation $reservation): void
    {
        try {
            $room->addReservation($reservation);
            echo "Room " . $room . " successfully booked for " . $reservation;
        } catch (ReservationException $msg) {
            echo "Cought Exception: " . $msg->getMessage();
        }
    }

    public static function checkIfRoomIsAvailable(array $roomReservations, Reservation $reservation): bool
    {
        foreach ($roomReservations as $roomReservation) {
            $newReserveStartDate = $reservation->getStartDate();
            $newReserveEndDate = $reservation->getEndDate();

            $existingReservationStartDate = $roomReservation->getStartDate();
            $existingReservationEndDate = $roomReservation->getEndDate();

            if ($newReserveEndDate >= $existingReservationStartDate && $newReserveStartDate <= $existingReservationEndDate) {
                return false;
            }
        }
        return true;
    }

}