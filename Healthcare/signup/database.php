<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "sign_up";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>