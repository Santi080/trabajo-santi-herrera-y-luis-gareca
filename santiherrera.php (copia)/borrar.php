<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
    <h1>INGRESE LA FILA QUE QUIERE BORRAR</h1>
</body>

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
 
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            text-align: center;
        }

        h1 {
            color: #ff0000; /* Color rojo */
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #428bca;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #3071a9;
        }

</style>

<body>
   
    <form action="vaciar.php" method ="POST" class="row g-3"
    <label for="id">ID </label>

    <input name ="id" type = "text" placeholder="Ingrese su id" maxlength="30"
    required>

    <button type="submit" class="btn btn-primary col-md-9 mx-auto" data-bs-toggle="modal"
     data-bs-target="·staticBackdrop">eliminar</button>
     <button><a href="consulta.php">Datos Incertados</a></button>
     
    </form>

</body>

</html>