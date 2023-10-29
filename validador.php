<?php
// Inicia la sesión para acceder a las variables de sesión
session_start();

// Recibe los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Usuario y contraseña válidos
$usuarioValido = 'FernandoCastellanos';
$contrasenaValida = 'estoLoAprueboFijo';

// Verifica si el usuario y la contraseña son correctos
if ($usuario === $usuarioValido && $contrasena === $contrasenaValida) {
    // Almacena el nombre de usuario en una variable de sesión
    $_SESSION['usuario'] = $usuario;

    // Inicio de sesión exitoso, redirige al usuario a index.php
    header('Location: index.php');
    exit();
} else {
    // Si no es correcto, muestra un mensaje y un enlace para volver al login
    echo 'Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.<br>';
    echo '<a href="login.html">Volver al Login</a>';
}
?>
