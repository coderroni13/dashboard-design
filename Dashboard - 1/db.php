<?php
$conn = mysqli_connect("localhost", "root", "", "culinaryhub");
if (!$conn) {
    die("Database connection failed");
}
session_start();
