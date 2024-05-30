<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['id_usuario'])) {
    header("Location: Perfil.php");
    exit();
}

// Incluir el archivo de conexión a la base de datos
include("conexion.php");

// Obtener el ID del usuario de la sesión
$id_usuario = $_SESSION['id_usuario'];

// Preparar y ejecutar la consulta para eliminar el usuario
$stmt = $conexion->prepare("DELETE FROM usuarios WHERE id_usuario = ?");
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$stmt->close();

// Destruir la sesión
session_destroy();

// Redirigir a la página de inicio
header("Location: ../index.php");
exit();