<?php require_once 'src/views/layout.php'; ?>

<?php if (is_object($pet)): ?>
  <h1>
    <?= $pet->name ?>
  </h1>
<?php else: ?>
  <p>No existe la mascota</p>
<?php endif; ?>

<a href="?action=index">Atrás</a>