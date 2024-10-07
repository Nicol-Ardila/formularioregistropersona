<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    
    $usuario_valido = "itfip";
    $contrasena_valida = "2024";


    if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {

        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        if ($usuario == $usuario_valido && $contrasena == $contrasena_valida) {
            echo "<h2>Inicio de sesión exitoso</h2>";
            echo "¡Bienvenido, $usuario!";
        } else {
            echo "<h2>Error de inicio de sesión</h2>";
            echo "Usuario o contraseña incorrectos.";
        }
    } else {
        echo "<h2>Error</h2>";
        echo "Datos de usuario o contraseña no enviados.";
    }
} else {
    echo "<h2>Acceso no permitido</h2>";
}
?>
