<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../index.php");
    exit();
}

// Incluir el archivo de conexión a la base de datos
include("conexion.php");

// Verificar si se ha enviado el formulario con el nuevo nombre de usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nuevo_usuario']) && !empty($_POST['nuevo_usuario'])) {
        // Obtener el nuevo nombre de usuario del formulario
        $nuevo_usuario = trim($_POST['nuevo_usuario']);

        // Obtener el ID del usuario de la sesión
        $id_usuario = $_SESSION['id_usuario'];

        // Preparar y ejecutar la consulta para actualizar el nombre de usuario
        $stmt = $conexion->prepare("UPDATE usuarios SET usuario = ? WHERE id_usuario = ?");
        $stmt->bind_param("si", $nuevo_usuario, $id_usuario);

        if ($stmt->execute()) {
            // Actualización exitosa
            $_SESSION['mensaje'] = "Nombre de usuario actualizado correctamente.";
        } else {
            // Error en la actualización
            $_SESSION['mensaje'] = "Error al actualizar el nombre de usuario.";
        }

        $stmt->close();
    } else {
        $_SESSION['mensaje'] = "El nuevo nombre de usuario no puede estar vacío.";
    }
}

// Redirigir de vuelta al perfil
header("Location: Perfil.php");
exit();
