<?php
session_start();
include 'config.php';

$update = false;
$id = "";
$first_name = "";
$last_name = "";
$email = "";
$phone = "";
$services = "";
$dates = "";
$species = "";
$photo = "";

if (isset($_POST['add'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $services = $_POST['services'];
    $dates = $_POST['dates'];
    $species = $_POST['species'];
    $photo = $_FILES['image']['name'];
    $upload = "uploads/" . $photo;

    $query = "INSERT INTO tabela_1(first_name, last_name, email, phone, services, dates, species, photo) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssss", $first_name, $last_name, $email, $phone, $services, $dates, $species, $upload);
    $stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);

    header('location:register.php');

    $_SESSION['response'] = "Data was successfully added to the database.";
    $_SESSION['res_type'] = "success";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "SELECT photo FROM tabela_1 WHERE id=?";
    $stmt2 = $conn->prepare($sql);
    $stmt2->bind_param("i", $id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $row = $result2->fetch_assoc();

    $imagepath = $row['photo'];
    unlink($imagepath);

    $query = "DELETE FROM tabela_1 WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header('location:table.php');

    $_SESSION['response'] = "Data was successfully deleted from the database.";
    $_SESSION['res_type'] = "danger";
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $query = "SELECT * FROM tabela_1 WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $id = $row['id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $services = $row['services'];
    $dates = $row['dates'];
    $species = $row['species'];
    $photo = $row['photo'];

    $update = true;
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $services = $_POST['services'];
    $dates = $_POST['dates'];
    $species = $_POST['species'];
    $oldimage = $_POST['oldimage'];

    if (isset($_FILES['image']['name']) && ($_FILES['image']['name'] != "")) {
        $newimage = "uploads/" . $_FILES['image']['name'];
        unlink($oldimage);
        move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
    } else {
        $newimage = $oldimage;
    }
    $query = "UPDATE tabela_1 SET first_name=?, last_name=?, email=?, phone=?, services=?, dates=?, species=?, photo=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssss", $first_name, $last_name, $email, $phone, $services, $dates, $species, $newimage, $id);
    $stmt->execute();

    header('location:table.php');

    $_SESSION['response'] = "Information was successfully updated.";
    $_SESSION['res_type'] = "warning";
}

if (isset($_GET['details'])) {
    $id = $_GET['details'];

    $curl = curl_init('http://localhost/zadatak3-veb-servisi/api/details/'.$id);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $odgovor = curl_exec($curl);
    $podaci = json_decode($odgovor);
    curl_close($curl);

    $vid = $podaci->id;
    $vfirst_name = $podaci->first_name;
    $vlast_name = $podaci->last_name;
    $vemail = $podaci->email;
    $vphone = $podaci->phone;
    $vservices = $podaci->services;
    $vdates = $podaci->dates;
    $vspecies = $podaci->species;
    $vphoto = $podaci->photo;
}
