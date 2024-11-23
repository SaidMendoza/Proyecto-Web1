<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="shortcut icon" href="../Loginweb/Css/favicon/icon.png" type="image/x-icon">


<style>
        .card {
            margin-top: 100px; /* Baja la tarjeta 100px desde arriba */
        }
    </style>
<body class="brown lighten-4"> <!-- Fondo marrón claro -->
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card brown lighten-5">
                <div class="card-content">
                    <h1 class="center-align brown-text">Inicio de sesión</h1>
                    <form method="POST" action="logica/loguear.php">
                        <div class="input-field">
                            <input id="no_cuenta" type="text" name="no_cuenta" class="blue-text">
                            <label for="no_cuenta">Número de Usuario</label>
                        </div>
                        <div class="input-field">
                            <input id="clave" type="password" name="clave">
                            <label for="clave">Contraseña</label>
                        </div>
                        <div class="center-align">
                            <button type="submit" class="waves-effect waves-light btn brown darken-1">Iniciar Sesión</button>
                            <a href='Registro.php' class='waves-effect waves-light btn brown darken-1'>Registro de usuario</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
