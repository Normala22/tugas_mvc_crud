<?php

include_once '../Config/Database.php';
include_once '../Controllers/UserController.php';

$database = new Database();
$db = $database->getConnection();

$userController = new UserController($db);
$userController->deleteMine($_GET['id']);
header('Location: ../Views/index.php');
exit;

?>