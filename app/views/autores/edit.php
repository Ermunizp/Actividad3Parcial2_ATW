<?php require_once __DIR__.'/../header.php'; ?>
<h2>Editar Autor</h2>
<form action="index.php?controller=autor&action=edit&id=<?= $_GET['id'] ?>" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?= htmlspecialchars($autor['nombre']) ?>" required>
    <button type="submit">Actualizar</button>
</form>
<?php require_once 'app/views/footer.php'; ?>