<?php require_once __DIR__.'/../header.php'; ?>
<h2>Editar Libro</h2>
<form action="index.php?controller=libro&action=edit&id=<?= $_GET['id'] ?>" method="POST">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" value="<?= htmlspecialchars($libro['titulo']) ?>" required>
    <label for="autor_id">Autor:</label>
    <select name="autor_id" required>
        <?php foreach ($autores as $autor): ?>
            <option value="<?= $autor['id'] ?>" <?= $autor['id'] == $libro['autor_id'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($autor['nombre']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Actualizar</button>
</form>
<?php require_once 'app/views/footer.php'; ?>