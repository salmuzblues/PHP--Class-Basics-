<?php
/**
 * Created by PhpStorm.
 * User: juan.carranza
 * Date: 8/27/18
 * Time: 15:36
 */



$edad  = array ( 12, 16, 21);

//condiciones while
echo" condition while <br>";
$i = 0;
while ( $i <3) {
    if ($edad[$i] >= 18)
        echo " you can register! <br>";

    else if ($edad[$i] >= 15 && $edad[$i] < 18)
        echo "you can register, but another section <br>";

    else
        echo " you can not register it, sorry you are out of age <br>";
    $i++;
}

  echo"----------------------------------------- <br>";

echo" condition do-while <br>";
// create other variable of increment.
// condition do-while.
$j=0;

    do{
        if ($edad[$j] >= 18)
            echo " you can register! <br>";

        else if ($edad[$j] >= 15 && $edad[$j] < 18)
            echo "you can register, but another section <br>";

        else
            echo " you can not register it, sorry you are out of age <br>";
        $j++;

    }while($j < 3);

   echo"--------------------------------------------- <br>";
   // condition for
echo" condition For <br>";
        for( $a= 0; $a < 3; $a++)
        {
            if ($edad[$a] >= 18)
                echo " you can register! <br>";

            else if ($edad[$a] >= 15 && $edad[$a] < 18)
                echo "you can register, but another section <br>";
            else
                echo " you can not register it, sorry you are out of age <br>";
        }
?>