<?php

$servername = "localhost";
$username = "root";
$password = "";
$bdname = "qwerty";

$conn = mysqli_connect($servername, $username, $password, $bdname);

if (!$conn) die("Connection Fialed". mysqli_connect_error());

?>