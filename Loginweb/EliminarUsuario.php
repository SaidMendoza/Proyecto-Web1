<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="../Loginweb/Css/favicon/icon.png" type="image/x-icon">

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
            max-width: 500px;
            width: 100%; /* Asegura que sea responsiva */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #6d4c41 !important; /* Marrón oscuro */
        }
        .btn-custom:hover {
            background-color: #5d4037 !important; /* Marrón más oscuro */
        }
        .success-message {
            color: green;
        }
        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <div class="card brown lighten-5">
        <div class="card-content center-align">
            <h5 class="brown-text text-darken-3">Eliminar Usuario</h5>
            <!-- Aquí se mostrará el mensaje de éxito o error -->
            <div id="message" class="center-align" style="display:none; margin-bottom: 20px;"></div>
            <form method="POST" action="./logica/deleteUsuario.php">
                <div class="input-field">
                    <input id="no_cuenta" type="text" name="no_cuenta" required>
                    <label for="no_cuenta">Número de Cuenta</label>
                </div>
                <button type="submit" class="btn btn-custom waves-effect waves-light">Eliminar usuario</button>
            </form>
        </div>
        <div class="card-action center-align">
            <a href="Principal.php" class="btn btn-custom waves-effect waves-light">Inicio de listas</a>
        </div>
    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        // Si el mensaje está presente en la URL (se pasa desde el backend), mostrarlo
        const urlParams = new URLSearchParams(window.location.search);
        const message = urlParams.get('message');
        const messageDiv = document.getElementById('message');

        if (message) {
            messageDiv.textContent = message;
            messageDiv.style.display = 'block';
            // Si el mensaje incluye "éxito", se muestra en verde, si no, en rojo
            if (message.includes('éxito')) {
                messageDiv.classList.add('success-message');
            } else {
                messageDiv.classList.add('error-message');
            }
        }
    </script>
</body>

</html>
