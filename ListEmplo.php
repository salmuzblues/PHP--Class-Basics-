<?php
include ('baseDatos.php');
$con = conexion_bd();
$query = "SELECT idLogin,nombre,password FROM Login;";
$rest = mysqli_query($con,$query);
mysqli_close($con);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h1>Lista de Usuarios</h1>

<ul>
    <?php
      while($registro = mysqli_fetch_assoc($rest))
      {
          echo '<li> id '.$registro['idLogin'].' '.$registro['nombre'].' su password es '.$registro['password'].' ';
          echo '<a href= "modfEmpl.php?emplId='.$registro['idLogin'].'">MODIFICAR</a> ';
          echo '<a href= "elimEmpl.php?emplId='.$registro['idLogin'].'">ELIMINAR</a></li>';
      }
    ?>

</ul>
</body>
</html>
