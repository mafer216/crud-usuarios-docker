<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Usuario</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Agregar Nuevo Usuario</h1>
  <form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="correo" placeholder="Correo" required>
    <input type="text" name="telefono" placeholder="Teléfono">
    <button type="submit" name="guardar">Guardar</button>
  </form>

  <a href="index.php" class="btn">⬅️ Volver</a>

  <?php
  if (isset($_POST['guardar'])) {
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $telefono = $_POST['telefono'];

      $sql = "INSERT INTO usuarios (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";
      if (mysqli_query($conexion, $sql)) {
          echo "<p class='ok'>✅ Usuario agregado correctamente.</p>";
      } else {
          echo "<p class='error'>❌ Error: " . mysqli_error($conexion) . "</p>";
      }
  }
  ?>
</body>
</html>
