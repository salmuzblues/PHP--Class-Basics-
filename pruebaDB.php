<?php
/**
 * Created by PhpStorm.
 * User: juan.carranza
 * Date: 8/31/18
 * Time: 20:15
 */

include("baseDatos.php");
$conexionBd = conexion_bd();

// check connection
if ($conexionBd->connect_error) {
    trigger_error('Database connection failed: '  . $conexionBd->connect_error, E_USER_ERROR);
}
mysqli_close($conexionBd);

?>