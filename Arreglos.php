<?php

$edad  = array ( 2, 14, 16, Pedro);


echo "the age of Briana is = $edad[0]"."<br>";
echo "the age of Marcos is = ".$edad[1]."<br>";
echo "the age of Juan is = ".$edad[2]."<br>";
echo "the age of 25, that is  = ".$edad[3]."<br>";

echo "<br>";
if($edad[2] >= 18)
    echo" you can register!";
else if($edad[2] >=15 && $edad[2] < 18 )
    echo "you can register, but another section";
else
    echo" you can not register it, sorry you are out of age";
?>