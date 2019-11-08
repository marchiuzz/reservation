<?php
declare(strict_types=1);

namespace Reservation\Rooms;


use Reservation\Room;

/**
 * Class SingleRoom
 * @package Reservation\Rooms
 */
class SingleRoom extends Room
{
    private const roomType = "Standart Room";
    private const bedCount = 1;
    private const hasRestroom = true;
    private const hasBalcony = false;
    private const extras = "TV, air-conditioner";

    /**
     * SingleRoom constructor.
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