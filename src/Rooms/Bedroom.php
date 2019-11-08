<?php
declare(strict_types=1);

namespace Reservation\Rooms;


use Reservation\Room;

/**
 * Class Bedroom
 * @package Reservation\Rooms
 */
class Bedroom extends Room
{
    private const roomType = "Gold room";
    private const bedCount = 2;
    private const hasRestroom = true;
    private const hasBalcony = true;
    private const extras = "TV, air-conditioner, refrigerator, minibar, bathtub";

    /**
     * Bedroom constructor.
     * @param int $roomNumber
     * @param int $price
     */
    public function __construct(int $roomNumber, int $price)
    {
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
        $this->setBedCount(self::bedCount);
        $this->setRoomType(self::roomType);
        $this->setHasRestroom(self::hasRestroom);
        $this->setHasBalcony(self::hasBalcony);
        $this->setExtras(self::extras);
    }
}