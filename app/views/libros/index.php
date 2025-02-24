<?php
require_once __DIR__.'/../header.php';
?>
<h2>Lista de Libros</h2>
<a href="index.php?controller=libro&action=create">Agregar Nuevo Libro</a>
<?php
if (!isset($libros) || empty($libros)) {
    echo "<p>No hay libros disponibles.</p>";
} else {
?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($libros as $libro): ?>
            <tr>
                <td><?= $libro['id'] ?></td>
                <td><?= htmlspecialchars($libro['titulo']) ?></td>
                <td><?= isset($libro['autor_nombre']) ? htmlspecialchars($libro['autor_nombre']) : 'Desconocido' ?></td>
                <td>
                    <a href="index.php?controller=libro&action=edit&id=<?= $libro['id'] ?>">Editar</a>
                    <a href="index.php?controller=libro&action=delete&id=<?= $libro['id'] ?>" onclick="return confirm('¿Seguro que deseas eliminar este libro?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php } ?>
<?php require_once __DIR__.'/..//footer.php'; ?>