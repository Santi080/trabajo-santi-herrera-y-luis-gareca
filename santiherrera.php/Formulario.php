<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>

<style>
    body {
            font-family: Arial, sans-serif;
            background-image: url('./img/cuidadfutura.jpg'); /* Ruta de la imagen de fondo */
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
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
        }

        h2 {
            color: red;
        }

        .form-label {
            font-weight: bold;
        }

        #btn button {
            margin-top: 20px;
        }
</style>
<section>
    
        <h2>Formulario</h2>
        <form action="consulta.php" method="POST" class="row g-3">
            <div class="col-12">
               <p> <label class="form-label">nombre</label></p>
                <input name ="nombre" type = "text" class="form-control" placeholder="Ingrese su nombre" maxlength="30"
                    required>
            </div> 
           
            <div class="col-12">
                <p><label class="form-label">apellido</label></p>
                <input name ="apellido" type = "text" class="form-control" placeholder="Ingrese su Apellido" maxlength="30"
                    required>
            </div> 
       
            <div class="col-12">
                <p><label class="form-label">correo</label></p>
                <input name ="correo" type = "email" class="form-control" placeholder="Ingrese su correo" maxlength="30"
                    required>
            </div> 
            
            <div class="col-md-8">
            <p><label class="form-label">consulta</label></p>
                <input name ="consulta" type = "text" class="form-control" placeholder="Ingrese su consulta" maxlength="80"
                    required>
            </div>
           
           <div class="col-12 text-center " id="btn">
                <button type="submit" class="btn btn-primary col-md-9 mx-auto" data-bs-toggle="modal"
                data-bs-target="·staticBackdrop"> Enviar</button> 
              
            </div>
        </form>
 </section>
 </html>