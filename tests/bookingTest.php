<?php

require_once('public/Booking.php');

$booking1 = new Booking(1, "12/2/23,6", 5, "12345", 5, 5);

$booking2 = new Booking(1, "12/2/23,6", 4, "12345", 5, 5);

$booking3 = new Booking(1, "12/2/23,6", 2, "12345", 5, 5);

echo $booking1;
echo $booking2;
echo $booking3;
