<?php require_once 'src/views/layout.php'; ?>

<h1>Mascotas</h1>

<a href="?action=create">Crear</a>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pets as $pet): ?>
      <tr>
        <td>
          <?= $pet->id ?>
        </td>
        <td>
          <?= $pet->name ?>
        </td>
        <td>
          <a href="?action=show&id=<?= $pet->id ?>">Ver</a>
          <a href="?action=edit&id=<?= $pet->id ?>">Editar</a>
          <a href="?action=destroy&id=<?= $pet->id ?>">Eliminar</a>
        </td>
      </tr>
    <?php endforeach; ?>
</table>