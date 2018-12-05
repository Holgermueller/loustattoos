<?php

$host = "127.0.0.1";
$dbusername = "root";
$dbpassword = "Kafka#678";
$dbname = "readit_mysqli";

$connection = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if(!$connection) {
    die("Connection failed:(".mysqli_connect_error());
}

?>