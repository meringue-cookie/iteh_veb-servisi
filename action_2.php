<?php
session_start();
include 'config.php';

if (isset($_POST['add'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $messages = $_POST['messages'];

    $query = "INSERT INTO tabela_2(first_name, last_name, email, messages) VALUES(?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $messages);
    $stmt->execute();

    header("Location: contact.php?mailsend");
}