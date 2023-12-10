<?php
$servername = "sql301.infinityfree.com";
$username = "if0_35508966";
$password = "sVfmDSBwbIpNf";
$dbname = "if0_35508966_webtechphp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    "Connected successfully";
}
?>
