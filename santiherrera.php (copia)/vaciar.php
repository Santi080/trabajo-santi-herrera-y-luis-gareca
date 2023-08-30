<?php
$id= $_POST["id"];
$conexion= mysqli_connect("localhost","root","","formulario2024") or exit ("no se puede conectar.....");
$eliminar = "DELETE FROM formulario WHERE id_nombre =$id";
mysqli_query($conexion,$eliminar);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menú Arriba</title>
</head>

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


    .menu-top {
        background-color: blue ;
        padding: 10px 0;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
}

    .menu-container {
       display: flex;
       justify-content: space-around;
}

.menu-top a {
    color: white;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
}

.menu-top a:hover {
    background-color: #555;
}

</style>

<body>
    <nav class="menu-top">
        <div class="menu-container">
            <a href="consulta.php">Datos ingresados</a>
            <a href="imagenes.php">Imágenes</a>
            <a href="borrar.php">Elimina los Datos</a>
            <a href="Formulario.php">Formulario</a>
        </div>
    </nav>

    <!-- Resto de tu contenido HTML -->
    <!-- ... -->

</body>