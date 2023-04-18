<?php 
require('users/User.php');

$jamie = new Staff(1,"Jamie","Murphy","085-747-7464");

$luke = new User(3,"31-4-21",5,2);

$Dumitru = new Guest(5,"Dima","0856464252", "Pojoga");


echo $jamie;
echo $luke;
echo $Dumitru;

?>