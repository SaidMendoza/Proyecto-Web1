<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="../Loginweb/Css/favicon/icon.png" type="image/x-icon">

    <style>
        /* Fondo general */
        body {
            background-color: #efebe9; /* Marrón claro */
        }

        /* Header */
        header {
            text-align: center;
            padding: 20px 0;
            background-color: #6d4c41; /* Marrón oscuro */
            color: white;
            margin-left: 250px;
            margin-right: 250px;
            margin-top: 20px;
        }

        /* Formulario */
        .form-container {
            margin-top: 50px;
        }

        /* Botones */
        .btn-custom {
            background-color: #6d4c41 !important; /* Marrón oscuro */
            transition: transform 0.3s ease-in-out;
        }
        .btn-custom:hover {
            background-color: #5d4037 !important; /* Marrón más oscuro */
            transform: scale(1.05);
        }

        /* Links */
        .link-container {
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        .link-container a {
            margin: 0 10px;
            color: #6d4c41;
            font-weight: bold;
        }
        .link-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h3>Registro de usuario</h3>
    </header>
    
    <div class="container form-container">
        <form action="./logica/enviarRegistro.php" method="post" class="card brown lighten-5">
            <div class="card-content">
                <!-- Nombre de usuario -->
                <div class="input-field">
                    <input id="nombre_usuario" type="text" name="nombre_usuario" required maxlength="100">
                    <label for="nombre_usuario">Ingresa tu nombre</label>
                </div>
                <!-- Carrera -->
                <div class="input-field">
                    <input id="carrera" type="text" name="carrera" required maxlength="100">
                    <label for="carrera">Carrera</label>
                </div>
                <!-- Correo -->
                <div class="input-field">
                    <input id="email" type="email" name="email" required maxlength="100">
                    <label for="email">Correo</label>
                </div>
                <!-- Número de cuenta -->
                <div class="input-field">
                    <input id="no_cuenta" type="text" name="no_cuenta" required maxlength="100">
                    <label for="no_cuenta">Número de cuenta</label>
                </div>
                <!-- Dirección -->
                <div class="input-field">
                    <input id="direccion" type="text" name="direccion" required maxlength="100">
                    <label for="direccion">Dirección particular</label>
                </div>
                <!-- Teléfono -->
                <div class="input-field">
                    <input id="telefono" type="text" name="telefono" required maxlength="8">
                    <label for="telefono">Teléfono</label>
                </div>
                <!-- Contraseña -->
                <div class="input-field">
                    <input id="password" type="password" name="password" required maxlength="8">
                    <label for="password">Contraseña</label>
                </div>
                <!-- Botón de envío -->
                <div class="center-align">
                    <button type="submit" name="submit" class="btn btn-custom waves-effect waves-light">Enviar Registro</button>
                </div>
            </div>
        </form>
    </div>

    <div class="link-container">
        <a href='./Registro.php'>Nuevo registro</a>
        <a href='./Principal.php'>Ver registro</a>
    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
