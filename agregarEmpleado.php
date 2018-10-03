<?php
/**
 * Created by PhpStorm.
 * User: juan.carranza
 * Date: 8/31/18
 * Time: 17:50
 */
include('baseDatos.php');

if (!empty($_POST['nomb']) && !empty($_POST['pass']))
{
   $con = conexion_bd();
   $query = "INSERT INTO Login (nombre,password) VALUES ('".$_POST['nomb']."','".$_POST['pass']."' )";
   $exito = mysqli_query($con,$query);
   mysqli_close($con);
   if ($exito) {
       echo "New record created successfully";

   }
else
       echo "Error". $query."<br>". mysqli_error($con);
}

?>