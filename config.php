<?php

$conn = new mysqli("localhost", "root", "", "zadatak1_php_ajax");

if ($conn->connect_error) {
    die("There was an error. Could not connect to the database." . $conn->connect_error);
}
