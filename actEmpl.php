<?php
include('baseDatos.php');

if (!empty($_POST['nomb']) && !empty($_POST['pass'])  && !empty($_POST['emplId']))
{
$con = conexion_bd();
$nom = $_POST['nomb'];
$pass = $_POST['pass'];
$id= $_POST['emplId'];
$query = "UPDATE Login SET nombre='$nom', password='$pass' WHERE idLogin = '$id'";
$exito = mysqli_query($con,$query);
mysqli_close($con);
if ($exito) {
echo " Modified the file. successfully!";

}
else
echo "Error". $query."<br>". mysqli_error($con);
}
?>