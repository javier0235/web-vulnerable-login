<?php
$usuario = "admin";
$clave = "123456";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user === $usuario && $pass === $clave) {
        echo "<h3>Bienvenido, $user</h3>";
    } else {
        echo "<h3>Credenciales incorrectas</h3>";
    }
}
?>
