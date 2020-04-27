<?php
include "database/DBConnect.php";
include "class/CarDB.php";
include "class/Car.php";
include "class/CarManager.php";

$carManager = new CarManager();
$cars = $carManager->index();

var_dump($cars);