<?php
declare(strict_types=1);

namespace Reservation;

use Throwable;

class ReservationException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function roomIsBusy(): void
    {
        echo "Room is not valid for those dates";
    }
}