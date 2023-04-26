<?php

require('./system/Room.php');

$room1 = new Room(45, 1, RoomType::SINGLE);

$room2 = new Room(4, 5, RoomType::SUITE);

$room3 = new Room(60, 2, RoomType::SUITE);

echo $room1;
echo $room2;
echo $room3;
