<?php
include_once '../Models/User.php';

class UserController{
    private $model;

    public function __construct($db) {
        $this->model= new User($db);
    }

    // Tabel 1 - Mine

    public function getMine(){
        return $this->model->readMine();
        
    }
    
    public function createMine($id, $nama, $pekerjaan){
        return $this->model->storeMine($id, $nama, $pekerjaan);
    }

    public function updateMine($id, $nama, $pekerjaan){
        return $this->model->updateMine($id, $nama, $pekerjaan);
    }

    public function deleteMine($id){
        return $this->model->deleteMine($id);
    }

    // Tabel 2 - Your

    public function getYour(){
        return $this->model->readYour();
    }
    
    public function createYour($nik, $alamat, $hobi, $id){
        return $this->model->storeYour($nik, $alamat, $hobi, $id);
    }

    public function updateYour($nik, $alamat, $hobi, $id){
        return $this->model->updateYour($nik, $alamat, $hobi, $id);
    }

    public function deleteYour($nik){
        return $this->model->deleteYour($nik);
    }

    public function changeToMine(){
        
    }

    //join
    public function Join(){
        return $this->model->readJoin();
    }


}


?>