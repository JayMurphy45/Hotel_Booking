<?php

$host = 'database';
$username = 'root';
$password = '';
$dbname = 'hotel_booking';

if(!$config = mysqli_connect($host,$username,$password,$dbname)){
    
    die("failed to connect to database");
}
