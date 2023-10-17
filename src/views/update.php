<?php require_once 'src/views/layout.php'; ?>

<h1>Actualizar Mascota</h1>

<?php if (is_object($pet)): ?>
  <form action="?action=update&id=<?= $pet->id ?>" method="post">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="<?= $pet->name ?>">
    <button type="submit">Guardar</button>

    <a href="?action=index">Atrás</a>
  </form>
<?php else: ?>
  <p>No existe la mascota</p>
<?php endif; ?>