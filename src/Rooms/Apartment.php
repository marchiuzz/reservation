<?php
declare(strict_types=1);

namespace Reservation\Rooms;


use Reservation\Room;

/**
 * Class Apartment
 * @package Reservation\Rooms
 */
class Apartment extends Room
{
    private const roomType = "Diamond room";
    private const bedCount = 4;
    private const hasRestroom = true;
    private const hasBalcony = true;
    private const extras = "TV, air-conditioner, refrigerator,
kitchen box, mini-bar, bathtub, free Wi-fi";

    /**
     * Apartment constructor.
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