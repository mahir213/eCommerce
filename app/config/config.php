<?php
session_start();

$servername = "localhost";
$db_username = "root";
$db_password = "";
$databasename = "shop";

$conn = mysqli_connect($servername, $db_username, $db_password, $databasename);

if(!$conn) {
    die("Connection failed");
}

?>