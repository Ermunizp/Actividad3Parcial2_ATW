<?php
require_once __DIR__.'/../models/Libro.php';

class LibroController {
    public function index() {
        $libro = new Libro();
        $libros = $libro->getAll();
        require_once __DIR__.'/../views/libros/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = $_POST['titulo'];
            $autor_id = $_POST['autor_id'];
            $libro = new Libro();
            $libro->create($titulo, $autor_id);
            header('Location: index.php?controller=libro&action=index');
        }
    }

    public function edit() {
        $libro = new Libro();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_GET['id'];
            $titulo = $_POST['titulo'];
            $autor_id = $_POST['autor_id'];
            $libro->update($id, $titulo, $autor_id);
            header('Location: index.php?controller=libro&action=index');
        } else {
            $id = $_GET['id'];
            $libroData = $libro->getById($id);
            require_once __DIR__.'/../views/libros/edit.php';
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $libro = new Libro();
        $libro->delete($id);
        header('Location: index.php?controller=libro&action=index');
    }
}
?>
