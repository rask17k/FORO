<?php
// PRIMERA APROXIMACIÓN AL MODELO VISTA CONTROLADOR.
include_once 'app/funciones.php';

// Salida hacia buffer
ob_start();
$msg = "";

if (!isset($_REQUEST['orden'])) {
    include_once 'app/plantillas/entrada.php';
} else {
    switch ($_REQUEST['orden']) {
        case "Entrar":
            if (isset($_REQUEST['nombre']) && isset($_REQUEST['contraseña']) &&
                usuarioOK($_REQUEST['nombre'], $_REQUEST['contraseña'])) {
                echo "Bienvenido <b>" . limpiarEntrada($_REQUEST['nombre']) . "</b><br>";
                include_once 'app/plantillas/comentario.html';
            } else {
                $msg = "Usuario o contraseña no válidos";
                include_once 'app/plantillas/entrada.php';
            }
            break;
            
        case "Nueva opinión":
            include_once 'app/plantillas/comentario.html';
            break;
            
        case "Detalles":
            if (isset($_REQUEST['tema']) && isset($_REQUEST['comentario'])) {
                $tema = limpiarEntrada($_REQUEST['tema']);
                $comentario = limpiarEntrada($_REQUEST['comentario']);
                include_once 'app/plantillas/comentariorelleno.php';
                include_once 'app/plantillas/detalles.php';
            }
            break;
            
        case "Terminar":
            include_once 'app/plantillas/entrada.php';
            break;
    }
}

$contenido_php = ob_get_clean();
include_once "app/plantillas/principal.php";
?>