<?php
declare(strict_types=1);

namespace Reservation;

/**
 * Interface ReservableInterface
 * @package Reservation
 */
interface ReservableInterface
{
    /**
     * @param Reservation $reservation
     */
    public function addReservation(Reservation $reservation): void;

    /**
     * @param Reservation $reservation
     */
    public function removeReservation(Reservation $reservation): void;
}