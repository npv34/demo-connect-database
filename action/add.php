<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../database/DBConnect.php";
    include "../class/Car.php";
    include "../class/CarDB.php";
    include "../class/CarManager.php";
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $author = $_REQUEST['author'];
    $price = $_REQUEST['price'];

    $car = new Car($id,$name,$author,$price);
    $carManager = new CarManager();
    $carManager->add($car);
    header('location: ../index.php');
}