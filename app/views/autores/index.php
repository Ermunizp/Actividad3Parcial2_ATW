<?php
require_once __DIR__.'/../header.php';
?>
<h2>Lista de Autores</h2>
<a href="index.php?controller=autor&action=create">Agregar Nuevo Autor</a>
<?php
if (!isset($autores) || empty($autores)): ?>
    <p>No hay autores disponibles.</p>
<?php else: ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($autores as $autor): ?>
            <tr>
                <td><?= $autor['id'] ?></td>
                <td><?= htmlspecialchars($autor['nombre']) ?></td>
                <td>
                    <a href="index.php?controller=autor&action=edit&id=<?= $autor['id'] ?>">Editar</a>
                    <a href="index.php?controller=autor&action=delete&id=<?= $autor['id'] ?>" onclick="return confirm('¿Seguro que deseas eliminar este autor?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
<?php require_once __DIR__.'/../footer.php'; ?>
