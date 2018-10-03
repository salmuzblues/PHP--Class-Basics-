<?php
/**
 * Created by PhpStorm.
 * User: juan.carranza
 * Date: 8/31/18
 * Time: 17:57
 */
function conexion_bd(){

    $servidor = "mysql";
    $nombBD = "Tienda";
    $usuario= "root";
    $password= "password";

    $conexion= new mysqli($servidor,$usuario,$password,$nombBD) or die("Connect failed: %s\n". $conexion -> error);

    return $conexion;
}

/*
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}
*/

?>