<?php
        
$nombre= $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo= $_POST["correo"];
$consulta= $_POST["consulta"];

$conexion= mysqli_connect("localhost","root","","formulario2024") or exit ("no se puede conectar.....");
echo " ABIERTA";

$insertar= "INSERT INTO `formulario` VALUES ( NULL,'$nombre','$apellido','$correo','$consulta')";
$rta = mysqli_query($conexion,$insertar);
if (!$rta ){
   echo " consulta enviada";
}
#else {
    header("consulta.php")
#}
?>
 