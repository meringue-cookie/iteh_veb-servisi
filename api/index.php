<?php
require 'flight/Flight.php';

Flight::route('/', function(){
});

Flight::route('GET /data', function(){
    header("Content-Type: application/json; charset=utf-8");
    $mysqli = new MySqli('localhost', 'root', '', 'zadatak1_php_ajax');
    $query = "SELECT * FROM tabela_1";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $niz = [];
    while($row = $result->fetch_assoc()){
        $niz[] = $row;
    }
    echo json_encode($niz);
});

Flight::route('GET /details/@id', function($id){
    header("Content-Type: application/json; charset=utf-8");
    $mysqli = new MySqli('localhost', 'root', '', 'zadatak1_php_ajax');
    $query = "SELECT *FROM tabela_1 WHERE id=?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    echo json_encode($row);
});

Flight::route('GET /data2', function(){
    header("Content-Type: application/json; charset=utf-8");
    $mysqli = new MySqli('localhost', 'root', '', 'zadatak1_php_ajax');
    $query = "SELECT * FROM tabela_2";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $niz = [];
    while($row = $result->fetch_assoc()){
        $niz[] = $row;
    }
    echo json_encode($niz);
});

Flight::start();
