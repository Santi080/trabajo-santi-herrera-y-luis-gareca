<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    body {
            font-family: Arial, sans-serif;
            background-image: url('./img/fondito.jpg'); /* Ruta de la imagen de fondo */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        section {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        /* Estilos para el formulario */
        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            display: block;
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* Estilos para el contenido del administrador */
        #contenido_admin {
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para los enlaces */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Estilos para los botones */
        a.button {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        a.button:hover {
            background-color: #0056b3;
        }

        a.button:last-child {
            margin-right: 0;
        }
     
</style>

<section>
    <h2>SESSION</h2>
    <form action="acceder.php" method="POST">
        <input type="text" name="usuario" placeholder="usuario">
        <input type="password" name="pass" placeholder="contraseña">
        <input type="submit" value="Acceder">
    </form>
    <?php if(isset($_SESSION['administrador'])) { ?>
    <div id="contenido_admin">
        <h2>contenido para Administrador</h2>
        <p>ahora usted es administrador y puede verificar los datos</p>
        <p><a href="salir.php">salir</a></p>
        <p><a href="Formulario.php">Formulario</a></p>
    </div>
    <?php } ?>
</section>

</body>
</html>
