<?php
declare(strict_types=1);

namespace Reservation;

interface ReservableInterface
{
    public function addReservation(Reservation $reservation): void;
    public function removeReservation(Reservation $reservation): void;
}