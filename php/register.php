<?php
// Incluir el archivo de conexión a la base de datos
include ("conexion.php");

// Iniciar una nueva sesión o reanudar la existente
session_start();

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
        header("Location: ../index.php?message=" . urlencode($message));
        exit();
    } else {
        // Usuario no existe, proceder con la inserción
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt->close();

        $stmt = $conexion->prepare("INSERT INTO usuarios (usuario, contraseña) VALUES (?, ?)");
        $stmt->bind_param("ss", $usuario, $password_hash);

        if ($stmt->execute()) {
            // Registro exitoso, iniciar sesión automáticamente
            $id_usuario = $stmt->insert_id;
            $_SESSION['id_usuario'] = $id_usuario;
            
            // Redirigir al usuario a la página de perfil o principal
            header("Location: pagina_principal.php");
            exit();
        } else {
            // Error en el registro
            $message = "Error en el registro: " . $stmt->error;
            header("Location: ../index.php?message=" . urlencode($message));
            exit();
        }
    }

    $stmt->close();
    $conexion->close();
}