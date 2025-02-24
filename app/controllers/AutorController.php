<?php
require_once __DIR__.'/../models/Autor.php';

class AutorController {
    public function index() {
        $autor = new Autor();
        $autores = $autor->getAll();
        require_once __DIR__.'/../views/autores/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $autor = new Autor();
            $autor->create($nombre);
            header('Location: index.php?controller=autor&action=index');
        }
    }

    public function edit() {
        $autor = new Autor();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_GET['id'];
            $nombre = $_POST['nombre'];
            $autor->update($id, $nombre);
            header('Location: index.php?controller=autor&action=index');
        } else {
            $id = $_GET['id'];
            $autorData = $autor->getById($id);
            require_once __DIR__.'/../views/autores/edit.php';
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $autor = new Autor();
        $autor->delete($id);
        header('Location: index.php?controller=autor&action=index');
    }
}
?>
