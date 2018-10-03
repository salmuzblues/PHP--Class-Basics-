<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testing the page with Docker </title>
</head>
<body>
<br>
<h1> LOGIN </h1>

<form method="post" action="recepciónPOST.php">
    USUARIO: <input type="text" name="user"> <br><br>
    PASSWORD: <input type="password" name="pwd"> <br><br>
    <input type="submit" value="ENVIAR">
</form>
<br>
<p>-----------------------------------------------</p>
 <h2> Calculadora</h2>
<form method="get" action="Calculadora.php">
    <h2> Insert the numbers </h2>
    NUMBER 1: <input type="number" name="number1"> <br>
    NUMBER 2: <input type="number" name="number2"><br>

    <H2> Select the operation</H2>
    <input type="radio" name="operation" value="sum"> SUM <br>
    <input type="radio" name="operation" value="subtraction"> SUBTRACTION <br>
    <input type="radio" name="operation" value="multiplication"> MULTIPLICATION<br>
    <input type="radio" name="operation" value="division"> DIVISION<br> <br>
    <input type="submit" value="ENVIAR">
</form>
<br>
<h2> Insert new Employee </h2>
<form method="post" action="agregarEmpleado.php" name="nuevoUser">
    NOMBRE USUARIO: <input type="text" name="nomb"><br>
    PASSWORD:  <input type="text" name="pass"><br>
    <br>
    <input type="submit" name="agregarEmp" value="ENVIAR">

</form>
<br>
<?php
echo"Hello my friend, it is working yeah ,,, you are the best !!";
echo"<br>";
echo"<br>";
$edad = 22;
echo"Martin's age is = ".$edad;
echo"<br>";
include('Arreglos.php');
echo"<br>";
echo"<br>";
include('estructurasRep.php');
echo"<br>";
echo"<br>";
//include('Activity1.php');
?>
</body>
</html>