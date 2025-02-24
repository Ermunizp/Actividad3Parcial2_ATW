<?php require_once 'app/views/header.php'; ?>
<h2>Agregar Nuevo Autor</h2>
<form action="index.php?controller=autor&action=create" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <button type="submit">Guardar</button>
</form>
<?php require_once 'app/views/footer.php'; ?>