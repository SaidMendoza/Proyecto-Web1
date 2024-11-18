<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');
$nombreUser = $_POST['nombre_usuario'];

// Consulta para verificar si el usuario ya existe
$buscarusuario = "SELECT * FROM persona WHERE nombre_usuario ='$nombreUser'";
$resultado = $conexion->query($buscarusuario);
$count = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Resultado</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #efebe9; /* Marrón claro */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            max-width: 600px;
            width: 100%; /* Asegura que la tarjeta sea responsiva */
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto; /* Centra horizontalmente */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }
        .btn-custom {
            background-color: #6d4c41 !important; /* Marrón oscuro */
        }
        .btn-custom:hover {
            background-color: #5d4037 !important; /* Marrón más oscuro */
        }
    </style>
</head>
<body>
    <div class="card brown lighten-5">
        <div class="card-content center-align">
            <!-- Mensajes -->
            <?php
            if ($count == 1) {
                echo "<h5 class='red-text'>El usuario ya está registrado</h5>";
            } else {
                mysqli_query($conexion, "INSERT INTO persona (
                    nombre_usuario, carrera, no_cuenta, direccion, telefono, email, password
                ) VALUES (
                    '$_POST[nombre_usuario]',
                    '$_POST[carrera]',
                    '$_POST[no_cuenta]',
                    '$_POST[direccion]',
                    '$_POST[telefono]',
                    '$_POST[email]',
                    '$_POST[password]'
                )");
                echo "<h5 class='green-text'>Usuario creado con éxito</h5>";
            }
            ?>
        </div>
        <div class="card-action center-align">
            <a href="../Registro.php" class="btn btn-custom waves-effect waves-light">Nuevo registro</a>
            <a href="../Principal.php" class="btn btn-custom waves-effect waves-light">Ver registros</a>
        </div>
    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
