<?php require_once 'app/views/header.php'; ?>
<h2>Agregar Nuevo Libro</h2>
<form action="index.php?controller=libro&action=create" method="POST">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>
    <label for="autor_id">Autor:</label>
    <select name="autor_id" required>
        <?php foreach ($autores as $autor): ?>
            <option value="<?= $autor['id'] ?>"><?= htmlspecialchars($autor['nombre']) ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Guardar</button>
</form>
<?php require_once 'app/views/footer.php'; ?>