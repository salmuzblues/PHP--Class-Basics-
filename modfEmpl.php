<?php
/**
 * Created by PhpStorm.
 * User: juan.carranza
 * Date: 9/11/18
 * Time: 23:09
 */
include ("baseDatos.php");
$cone = conexion_bd();
$var = $_GET['emplId'];
$query = "SELECT idLogin, nombre, password FROM Login  WHERE idLogin = '" . mysqli_escape_string($cone,$var) . "'  LIMIT 1";
    $result = mysqli_query($cone, $query);
    $registro = mysqli_fetch_assoc($result);
mysqli_close($cone);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modify Employee</title>
</head>
<body>
<h2> Modify Employee </h2>
<form method="post" action="actEmpl.php">

    NOMBRE USUARIO: <input type="text" name="nomb" value="<?php  echo $registro['nombre']?>"><br>
    PASSWORD:  <input type="text" name="pass" value="<?php echo $registro['password'] ?>"><br>
    <br>
    <input type="hidden" name="emplId" value="<?php echo $registro['idLogin'] ?>"><br>
    <input type="submit" name="actEmpl" value="ENVIAR">
</form>
</body>
</html>