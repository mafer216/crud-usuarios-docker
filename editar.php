<?php include("conexion.php");

$id = $_GET['id'];
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id=$id");
$usuario = mysqli_fetch_assoc($resultado);

if (isset($_POST['actualizar'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo', telefono='$telefono' WHERE id=$id";
    mysqli_query($conexion, $sql);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Usuario</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Editar Usuario</h1>
  <form method="POST">
    <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required>
    <input type="email" name="correo" value="<?= $usuario['correo'] ?>" required>
    <input type="text" name="telefono" value="<?= $usuario['telefono'] ?>">
    <button type="submit" name="actualizar">Actualizar</button>
  </form>

  <a href="index.php" class="btn">⬅️ Volver</a>
</body>
</html>
