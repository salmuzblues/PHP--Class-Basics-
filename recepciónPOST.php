<?php
/**
 * Created by PhpStorm.
 * User: juan.carranza
 * Date: 8/29/18
 * Time: 19:17
 */


//var for sorting

$Usuario = $_POST['user'];
$Password= $_POST['pwd'];

// create function

function verificarDatos($Usuario, $Password){

  if ($Usuario == "Juan" && $Password == "Admin")
      return true;
   else
      return false;
}

// print  calling the  function

$Resultado = verificarDatos($Usuario , $Password);

if ( $Resultado )
    echo "WELCOME";
else
    echo "ERROR, please insert again your User and Password";



?>