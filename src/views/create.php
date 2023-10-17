<?php require_once 'src/views/layout.php'; ?>

<h1>Nueva Mascota</h1>

<form action="?action=store" method="post">
  <label for="name">Nombre</label>
  <input type="text" name="name" id="name">
  <button type="submit">Guardar</button>
  <!-- Botón atras -->
  <a href="?action=index">Atrás</a>
</form>