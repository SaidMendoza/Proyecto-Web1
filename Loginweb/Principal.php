<?php
session_start();
$no_cuenta = $_SESSION['usermane'];

if (!isset($no_cuenta)) {
    header("location: ./index.php");
} else {
    echo "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Bienvenido</title>
        <!-- Materialize CSS -->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' rel='stylesheet'>
        <!-- Material Icons -->
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <link rel='shortcut icon' href='../Loginweb/Css/favicon/icon.png' type='image/x-icon'>

        <style>
            /* Fondo general */
            body {
                background-color: #efebe9; /* Marrón claro */
            }

            /* Encabezados */
            .header-text {
                color: #4e342e; /* Marrón oscuro */
                transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out; /* Transición suave */
            }
            .header-text:hover {
                transform: scale(1.05); /* Agranda un poco */
                opacity: 0.9; /* Disminuye ligeramente la opacidad */
            }

            /* Contenedor de la tabla */
            .table-container {
                margin-top: 50px; /* Espacio arriba */
            }

            /* Resaltar filas al pasar el ratón */
            table tr:hover {
                background-color: #d7ccc8; /* Marrón más claro */
                transition: background-color 0.3s ease-in-out; /* Suaviza el cambio */
            }

            /* Botones personalizados */
            .btn-custom {
                background-color: #6d4c41 !important; /* Marrón oscuro */
                transition: transform 0.3s ease-in-out; /* Suaviza la animación */
                margin-right: 10px; /* Espacio entre botones */
            }
            .btn-custom:hover {
                transform: scale(1.1); /* Aumenta el tamaño al pasar el ratón */
                background-color: #5d4037 !important; /* Marrón más oscuro */
            }

            /* Contenedor de los botones */
            .button-container {
                margin-top: 20px;
                margin-bottom: 20px; /* Espacio entre la tabla y los botones */
            }

            /* Mensajes sin registros */
            .no-records {
                color: #bf360c; /* Rojo marrón */
                text-align: center;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1 class='center-align header-text'>Bienvenido</h1>
            <p class='center-align'>Tu número de Usuario es: <strong>$no_cuenta</strong></p>
            <div class='center-align'>
                <a href='logica/salir.php' class='btn btn-custom waves-effect'>Salir</a>
            </div>
            <div class='table-container'>
    ";

    // Requiere la conexión
    require "./logica/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    $consulta_sql = "SELECT * FROM persona";
    $resultado = $conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado); 

    if ($count > 0) {
        // Tabla estilizada con efectos
        echo "
        <table class='highlight centered responsive-table'>
            <thead>
                <tr class='header-text'>
                    <th>User</th>
                    <th>No de usuario</th>
                    <th>User Spotify</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Contraseña</th>
                    <th>Fecha de Registro</th>
                    <th>Permisos</th>
                </tr>
            </thead>
            <tbody>
        ";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "
            <tr>
                <td>{$row['nombre_usuario']}</td>
                <td>{$row['no_cuenta']}</td>
                <td>{$row['direccion']}</td>
                <td>{$row['telefono']}</td>
                <td>{$row['email']}</td>
                <td>{$row['password']}</td>
                <td>{$row['fecha_registro']}</td>
                <td>{$row['permisos']}</td>
            </tr>
            ";
        }
        echo "
            </tbody>
        </table>
        ";
    } else {
        echo "<h4 class='no-records'>Sin Ningún Registro</h4>";
    }

    echo "
        <div class='center-align button-container'>
            <a href='EliminarUsuario.php' class='btn btn-custom waves-effect'>Eliminar Usuario</a>
            <a href='Registro.php' class='btn btn-custom waves-effect'>Registro</a>
        </div>
    ";
    echo "
        </div> <!-- table-container -->
    </div> <!-- container -->
    <!-- Materialize JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
    </body>
    </html>
    ";
}
?>

