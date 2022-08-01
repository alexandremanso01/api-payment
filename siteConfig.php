<?php
session_start();

//Importando as Classes
include('class.PDO.php');
include('functions.php');
include('Models/NotificationModel.php');
include('Models/CustomerModel.php');
include('Controllers/NotificationController.php');
include('Controllers/CustomerController.php');
include('Controllers/PaymentController.php');

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

?>