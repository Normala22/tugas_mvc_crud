<?php

include_once '../Config/Database.php';
include_once '../Controllers/UserController.php';

$database = new Database();
$db = $database->getConnection();

$userController = new UserController($db);
$nilai = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="" method="POST">

                    <div class="mb-3">
                        <label for="id_input" class="form-label">ID</label>
                        <input type="text" class="form-control" name="idInput" id="id_input" value="<?=$nilai?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_input" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_input" name="namaInput" placeholder>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan_input" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan_input" name="pekerjaanInput">
                    </div>
                    <div class="row mx-2">
                        <button type="submit" name="submit" class="btn btn-primary mb-3">Edit Data</button>
                    </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
if (isset($_POST["submit"])){
    echo($_POST['idInput']);
    $userController->updateMine($_POST['idInput'], $_POST['namaInput'], $_POST['pekerjaanInput'], $_POST['pekerjaanInput']);
    header('Location: ../Views/index.php');
    exit;
}
