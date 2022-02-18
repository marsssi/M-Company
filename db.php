<?php


// DATABASE  CONNECTION
$host='localhost';
$user='root';
$pass='';
$dbname='m-company';

$con=mysqli_connect($host,$user,$pass,$dbname) OR die('Could not connect to MySQL' .mysqli_connect_error());


?>