<?php

include_once '../Config/Database.php';
include_once '../Controllers/UserController.php';

$database = new Database();
$db = $database->getConnection();

$userController = new UserController($db);
$nilai = $_GET['nik'];
$nilai_id = $_GET['id'];


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
                        <input type="text" class="form-control" id="id_input" name="idInput" placeholder="<?=$nilai_id?>">
                    </div>
                    <div class="mb-3">
                        <label for="nik_input" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik_input" name="nikInput" value="<?=$nilai?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat_input" class="form-label">alamat</label>
                        <input type="text" class="form-control" id="alamat_input" name="alamatInput">
                    </div>
                    <div class="mb-3">
                        <label for="hobi_input" class="form-label">hobi</label>
                        <input type="text" class="form-control" id="hobi_input" name="hobiInput">
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
    $userController->updateYour($_POST['idInput'], $_POST['nikInput'], $_POST['alamatInput'], $_POST['hobiInput']);
    header('Location: ../Views/index.php?tabel=2');
    exit;
}