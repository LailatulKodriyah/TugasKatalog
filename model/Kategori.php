<?php
require_once __DIR__ . '/../config/Database.php';

class Kategori {
    private $conn;
    private $table = "kategori";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result(); 
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($nama) {
        $query = "INSERT INTO {$this->table} (nama_kategori) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $nama); 

        return $stmt->execute();
    }
}
