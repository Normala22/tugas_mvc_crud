<?php

include_once '../Config/Database.php';
include_once '../Controllers/UserController.php';
include_once '../Views/index.php';


$userController->deleteYour($_GET['nik']);  
header('Location: ../Views/index.php?tabel=2');
exit;

?>