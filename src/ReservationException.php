<?php
declare(strict_types=1);

namespace Reservation;

use Throwable;

/**
 * Class ReservationException
 * @package Reservation
 */
class ReservationException extends \Exception
{
    /**
     * ReservationException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     *
     */
    public function roomIsBusy(): void
    {
        echo "Room is not valid for those dates";
    }
}