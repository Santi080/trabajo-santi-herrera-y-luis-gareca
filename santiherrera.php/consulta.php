<?php
include("conexion.php");
         $consulta= mysqli_query($conexion,"SELECT  * FROM formulario");
         while ($lista_consulta= mysqli_fetch_assoc($consulta) ){
             
             ?>
            <div class="consultas">
                <ul>
                    <li><?php echo $lista_consulta["nombre"];?></li>
                    <li><?php echo $lista_consulta["apellido"];?></li>
                    <li><?php echo $lista_consulta["correo"];?></li>
                    <li><?php echo $lista_consulta["consulta"];?></li>
                </ul>
            </div>
            <?php
             }
             ?>

<?php
$consulta_foto = mysqli_query($conexion, "SELECT * FROM imagenes");
while ($lista_foto = mysqli_fetch_assoc($consulta_foto)){
?>
<div>
	<h4> <?php echo $lista["descripcion"];?> </h4>
	<img class="foto" style="width:500px" src="<?php echo $lista_foto["url_foto"];?>">
</div>
<?php };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* ... Estilos previos ... */

        /* Estilos para el menú de navegación */
        .menu {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .menu a {
            padding: 10px 20px;
            text-decoration: none;
            background-color: #428bca;
            color: white;
            border-radius: 5px;
            margin: 0 5px;
        }

        .menu a:hover {
            background-color: #3071a9;
        }
    </style>
</head>
<body>
    <!-- Menú de navegación -->
    <div class="menu">
        <a href="imagenes.php">Imágenes</a>
        <a href="borrar.php">Inicio</a>
        <a href="Formulario.php">Formulario</a>
    </div>

    <!-- ... Tu código HTML existente ... -->

<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #e0e0e0;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .consulta-container, .foto-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            overflow: hidden;
            width: 100%;
            max-width: 600px;
        }

        .consulta-container ul, .foto h4 {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 0;
            border-radius: 5px;
        }

        .foto-container {
            text-align: center;
        }

        .foto {
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
            margin-top: 10px;
            border-radius: 5px;
        }

        .foto h4 {
            margin-top: 10px;
            background-color: #f0f0f0;
            padding: 5px 10px;
            border-radius: 5px;
        }


        body {
            font-family: Arial, sans-serif;
            background-color: #e0e0e0;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .consultas, .foto-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: calc(50% - 20px);
            box-sizing: border-box;
        }

        .consultas ul, .foto h4 {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 0;
            border-radius: 5px;
        }

        .foto-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .foto {
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
            margin-top: 10px;
            border-radius: 5px;
        }

        .foto h4 {
            margin-top: 10px;
            background-color: #f0f0f0;
            padding: 5px 10px;
            border-radius: 5px;
        }


</style>
</html>


