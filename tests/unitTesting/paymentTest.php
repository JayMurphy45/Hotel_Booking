<?php

require('./system/Payment.php');

$payment1 = new Payment(1, "4065 1279 6542 8971", 400, "06/02/23");
$payment2 = new Payment(2, "5067 7962 1234 4567", 600, "08/04/23");
$payment3 = new Payment(3, "5402 1908 2387 4329", 2000, "07/04/23");

echo $payment1;
echo $payment2;
echo $payment3;
