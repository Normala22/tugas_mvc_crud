<?php
class User{
    private $conn;
    private $table_mine = "mine";
    private $table_your = "your";

    public $id;
    public $nama;
    public $pekerjaan;
    public $nik;
    public $alamat;
    public $hobi;


    // Untuk menghubungkan dengan DB

    public function __construct($db){
        $this->conn = $db;
    }

    // Tabel 1 - Mine

    public function readMine(){
        $query = "SELECT * FROM ". $this->table_mine;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function storeMine($id, $nama, $pekerjaan){
        $query = "INSERT INTO " . $this->table_mine . " VALUES ($id, '$nama', '$pekerjaan')";
        $stmt = $this->conn->prepare($query);   
        $stmt->execute();
        return $stmt;
    }

    
    public function updateMine($id, $nama, $pekerjaan){
        $query = "UPDATE " . $this->table_mine . " SET nama = '$nama', pekerjaan = '$pekerjaan' WHERE id = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function deleteMine($id){
        $query = "DELETE FROM " . $this->table_mine . " WHERE id = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Tabel 2 - Your

    public function readYour(){
        $query = "SELECT * FROM ". $this->table_your;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function storeYour($nik, $alamat, $hobi, $id){
        $query = "INSERT INTO " . $this->table_your . " VALUES ('$nik', '$alamat', '$hobi', '$id')";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    
    public function updateYour($id, $nik, $alamat, $hobi){
        $query = "UPDATE " . $this->table_your . " SET id = '$id', alamat = '$alamat', hobi = '$hobi' WHERE nik = '$nik'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function deleteYour($nik){
        $query = "DELETE FROM " . $this->table_your . " WHERE nik = '$nik'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }


        // table join
    public function readJoin(){
        $query = "SELECT * FROM " . $this->table_mine . " INNER JOIN " . $this->table_your . " ON " . $this->table_mine . ".id = " . $this->table_your . ".id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}