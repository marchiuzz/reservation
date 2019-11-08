<?php
declare(strict_types=1);

namespace Reservation;

/**
 * Class BookManager
 * @package Reservation
 */
class BookManager
{
    /**
     * @param Room $room
     * @param Reservation $reservation
     */
    public static function bookRoom(Room $room, Reservation $reservation): void
    {
        try {
            $room->addReservation($reservation);
            echo "Room " . $room . " successfully booked for " . $reservation;
        } catch (ReservationException $msg) {
            echo $msg->roomIsBusy();
        }
    }

    /**
     * @param array $roomReservations
     * @param Reservation $reservation
     * @return bool
     */
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