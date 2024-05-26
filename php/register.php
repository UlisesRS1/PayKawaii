<?php
include ("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Verificar si el usuario ya existe
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Usuario ya existe
        $message = "Usuario ya existente, elige otro por favor";
        header("Location: login.php?message=" . urlencode($message));
        exit();
    } else {
        // Usuario no existe, proceder con la inserción
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt->close();

        $stmt = $conexion->prepare("INSERT INTO usuarios (usuario, contraseña) VALUES (?, ?)");
        $stmt->bind_param("ss", $usuario, $password_hash);
        $stmt->execute();
        $stmt->close();
        $conexion->close();

        // Redirigir al usuario a la página principal
        header("Location: ../index.php");
        exit();
    }

    $stmt->close();
    $conexion->close();
}