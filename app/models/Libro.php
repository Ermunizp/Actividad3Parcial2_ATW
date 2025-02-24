<?php
require_once __DIR__ . '/../../config/database.php';

class Libro {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT libros.*, autores.nombre as autor_nombre FROM libros JOIN autores ON libros.autor_id = autores.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT libros.id, libros.titulo, libros.autor_id, autores.nombre AS autor_nombre 
                  FROM libros 
                  JOIN autores ON libros.autor_id = autores.id 
                  WHERE libros.id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT); // Se usa bindValue en lugar de bind_param
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Se usa fetch en lugar de get_result()->fetch_assoc()
    }

    public function create($titulo, $autor_id) {
        $stmt = $this->conn->prepare("INSERT INTO libros (titulo, autor_id) VALUES (?, ?)");
        return $stmt->execute([$titulo, $autor_id]);
    }

    public function update($id, $titulo, $autor_id) {
        $stmt = $this->conn->prepare("UPDATE libros SET titulo = ?, autor_id = ? WHERE id = ?");
        return $stmt->execute([$titulo, $autor_id, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM libros WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>