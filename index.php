<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Usuarios</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Gestión de Usuarios</h1>
  <a href="agregar.php" class="btn">➕ Agregar Usuario</a>
  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Teléfono</th>
      <th>Acciones</th>
    </tr>

    <?php
    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios");
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['correo']}</td>
                <td>{$fila['telefono']}</td>
                <td>
                  <a href='editar.php?id={$fila['id']}'>✏️ Editar</a> |
                  <a href='eliminar.php?id={$fila['id']}' onclick='return confirm(\"¿Eliminar usuario?\")'>🗑️ Eliminar</a>
                </td>
              </tr>";
    }
    ?>
  </table>
</body>
</html>
