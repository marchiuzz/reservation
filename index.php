<?php
declare(strict_types=1);

use Reservation\BookManager;
use Reservation\Guest;
use Reservation\Reservation;
use Reservation\Rooms\SingleRoom;

require_once __DIR__."/vendor/autoload.php";

$room = new SingleRoom(1408, 99);
$guest = new Guest("Vardenis", "Pavardenis");

$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);

BookManager::bookRoom($room, $reservation);
