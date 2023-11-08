<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos enviados por el formulario
    $usuario = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasenia = $_POST["contrasenia"];


    if ($usuario == "enzo" && $contrasenia == "1") {
        // Iniciar la sesión
        $_SESSION['nombre'] = $usuario;
        // Redirigir al usuario a la página de inicio o a donde sea necesario.
        header("Location: inicio.html");
        exit;
    } else {
        // Si la validación falla, muestra un mensaje de error o redirige al usuario a la página de inicio de sesión con un mensaje de error.
        echo "Nombre de usuario o contraseña incorrectos";
        header("Location: crear_usuario");
        exit;
    }
}
?>