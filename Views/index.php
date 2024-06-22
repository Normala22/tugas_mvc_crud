<?php
include_once '../Config/Database.php';
include_once '../Controllers/UserController.php';

$database = new Database();
$db = $database->getConnection();

$userController = new UserController($db);
$mine = $userController->getMine();
$your = $userController->getYour();
$join = $userController->Join();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Resource/style-sidebar.css"/>
</head>
<body>
<nav>
    <button type="button" id="toggle-btn">
    <i class="fa fa-bars"></i>
    </button>
    <span>Menu</span>
    <ul class="sidebar-menu">
    <li>
        <a href="?tabel=1"><i class="fa fa-home"></i>Table 1</a>
    </li>
    <li>
        <a href="?tabel=2"><i class="fa fa-home"></i>Table 2</a>
    </li>
    <li>
        <a href="?tabel=3"><i class="fa fa-home"></i>Join Table</a>
    </li>
    <li id="bgModeBtn">
        <a href="#"><i id="bgModeIcon" class="fa fa-sun-o"></i>Mode</a>
    </li>
    </ul>
</nav>
<section>
    <main>
    <?php
    $tabel = isset($_GET['tabel']) ? $_GET['tabel'] : '1';
    if ($tabel == '2') {
        include 'tabel2.php';
    } elseif ($tabel == '3') {
        include 'JoinTable.php';
    } else {
        include 'tabel1.php';
    }
?>
    </main>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src= "../Resource/sidebar.js"></script>
</body>
</html>