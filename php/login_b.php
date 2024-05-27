<?php

include ("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Preparar y ejecutar la consulta
    $stmt = $conexion->prepare("SELECT contraseña FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($password_hash);
        $stmt->fetch();

        if (password_verify($password, $password_hash)) {
            // Autenticación exitosa
            header("Location: ../index.php");
            exit();
        } else {
            // Contraseña incorrecta
            $message = "Contraseña incorrecta";
        }
    } else {
        // Usuario no encontrado
        $message = "Usuario no encontrado";
    }

    $stmt->close();
    $conexion->close();

    // Redirigir con el mensaje
    header("Location: login.php?message=" . urlencode($message));
    exit();
}