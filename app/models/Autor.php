<?php
require_once __DIR__ . '/../../config/database.php';

class Autor {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM autores";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Se usa fetchAll para obtener todos los registros
    }
    public function getById($id) {
        $query = "SELECT * FROM autores WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT); // Se usa bindValue en lugar de bind_param
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Se usa fetch en lugar de get_result()->fetch_assoc()
    }
    public function create($nombre) {
        $stmt = $this->conn->prepare("INSERT INTO autores (nombre) VALUES (?)");
        return $stmt->execute([$nombre]);
    }

    public function update($id, $nombre) {
        $stmt = $this->conn->prepare("UPDATE autores SET nombre = ? WHERE id = ?");
        return $stmt->execute([$nombre, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM autores WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>