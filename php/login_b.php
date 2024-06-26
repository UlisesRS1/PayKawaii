<?php

// Iniciar una nueva sesión o reanudar la existente
session_start();

// Incluir el archivo de conexión a la base de datos
include ("conexion.php");

// Verificar si el método de solicitud es POST (es decir, si se ha enviado un formulario)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados desde el formulario de inicio de sesión
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['password'];

    // Preparar y ejecutar la consulta para verificar el usuario
    $stmt = $conexion->prepare("SELECT id_usuario, contraseña FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();

    // Verificar si se encontró un usuario con el nombre proporcionado
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_usuario, $contraseña_hash);
        $stmt->fetch();

        // Verificar la contraseña
        if (password_verify($contraseña, $contraseña_hash)) {
            // Autenticación exitosa
            
            // Guardar el ID y el nombre de usuario en la variable de sesión
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['usuario'] = $usuario;

            // Cerrar la consulta
            $stmt->close();

            // Redirigir al usuario a la página de inicio
            header("Location: pagina_principal.php");
            exit();
        } else {
            // Contraseña incorrecta
            $message = "Contraseña incorrecta";
        }
    } else {
        // Usuario no encontrado
        $message = "Usuario no encontrado";
    }

    // Cerrar la consulta
    $stmt->close();
    // Cerrar la conexión a la base de datos
    $conexion->close();

    // Redirigir con el mensaje
    header("Location: ../index.php?message=" . urlencode($message));
    exit();
}