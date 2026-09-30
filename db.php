<?php
$conn = mysqli_connect("localhost", "root", "", "smart campus");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>