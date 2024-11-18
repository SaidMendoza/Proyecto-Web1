<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado = $_POST['no_cuenta'];

// Comprobamos si el usuario existe antes de eliminarlo
$consultaVerificacion = "SELECT * FROM persona WHERE no_cuenta = '$registroEliminado'";
$resultadoVerificacion = $conexion->query($consultaVerificacion);
$count = mysqli_num_rows($resultadoVerificacion);

if ($count == 1) {
    // El usuario existe, se elimina
    $consulta = "DELETE FROM persona WHERE no_cuenta = '$registroEliminado'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    // Redirigir con un mensaje de éxito
    header('Location: ../EliminarUsuario.php?message=Usuario%20eliminado%20con%20éxito');
} else {
    // El usuario no existe, redirigir con un mensaje de error
    mysqli_close($conexion);
    header('Location: ../EliminarUsuario.php?message=Usuario%20no%20encontrado');
}
?>
