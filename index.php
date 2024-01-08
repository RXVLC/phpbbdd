<?php include('conexion.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de usuarios</title>
</head>
<body>
    <h1>Registro de usuarios</h1>
    <form action="procesar_registro.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>

        <input type="submit" value="Registrar">
    </form>
    <?php
    if (isset($_GET['registro'])) {
        if ($_GET['registro'] === "exitoso") {
            echo '<p style="color: green;">¡Usuario registrado correctamente!</p>';
        } elseif ($_GET['registro'] === "error") {
            echo '<p style="color: red;">Error al registrar usuario</p>';
        }
    }
    ?>
</body>
</html>
