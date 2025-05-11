<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Credenciales "quemadas"
$usuario_valido = "admin";
$contrasena_valida = password_hash("admin", PASSWORD_DEFAULT); // Utiliza password_hash para almacenar la contraseña de forma segura

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario y realizar validación básica
    $usuario_ingresado = isset($_POST['username']) ? $_POST['username'] : '';
    $contrasena_ingresada = isset($_POST['password']) ? $_POST['password'] : '';

    if (empty($usuario_ingresado) || empty($contrasena_ingresada)) {
        // Datos incompletos
        echo "Por favor, ingresa ambos el usuario y la contraseña.";
    } else {
        // Verificar credenciales
        if ($usuario_ingresado == $usuario_valido && password_verify($contrasena_ingresada, $contrasena_valida)) {
            // Autenticación exitosa
            // Redirigir a la página principal
            header("Location: html/index.html");
            exit(); // Asegura que el script se detenga después de redirigir
        } else {
            // Autenticación fallida
            echo "Credenciales incorrectas. Intenta de nuevo.";
        }
    }
}
?>

    
</body>
</html>