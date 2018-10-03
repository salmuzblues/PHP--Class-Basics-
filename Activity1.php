<?php
/**
 * Created by PhpStorm.
 * User: juan.carranza
 * Date: 8/28/18
 * Time: 16:25
 */

// var array;
$numero = array();

// store numbers from 1 to 100

for ($i=0; $i< 100; $i++)
{
    $numero[$i] = $i + 1;

    if ( $numero[$i] % 2 == 0  )
        echo"Numero Par =". $numero[$i]. "<br>";
}
echo"<br>";

for ($j=0; $j< 100; $j++)
{
    $numero[$j] = $j + 1;

    if ( $numero[$j] % 2 == 1 )
        echo"Numero Impar =". $numero[$j]. "<br>";
}
?>