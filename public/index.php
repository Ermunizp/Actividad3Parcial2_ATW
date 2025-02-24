<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/AutorController.php';
require_once __DIR__ . '/../app/controllers/LibroController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'libro';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
    case 'autor':
        $controllerInstance = new AutorController();
        break;
    case 'libro':
        $controllerInstance = new LibroController();
        break;
    default:
        die('Controlador no encontrado');
}

if (method_exists($controllerInstance, $action)) {
    $controllerInstance->$action();
} else {
    die('Acción no encontrada');
}
?>