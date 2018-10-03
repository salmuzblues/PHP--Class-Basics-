<?php
include('baseDatos.php');

if (!empty($_GET['emplId']))
{
    $con = conexion_bd();
    $id= $_GET['emplId'];
    $query = "DELETE FROM Login  WHERE idLogin = '$id'";
    $exito = mysqli_query($con,$query);
    mysqli_close($con);

    if ($exito) {
        echo " Deleted the file. successfully!";

    }
    else
        echo "Error". $query."<br>". mysqli_error($con);
}
?>