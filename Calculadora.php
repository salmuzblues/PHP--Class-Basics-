<?php
/**
 * Created by PhpStorm.
 * User: juan.carranza
 * Date: 8/30/18
 * Time: 12:45
 */

// Var
$number1= $_GET['number1'];
$number2= $_GET['number2'];
$operation= $_GET['operation'];
// choose option for operation
switch ($operation){
    case 'sum':  echo "the number is: ". sum($number1, $number2 );   break;
    case 'subtraction': echo "the number is: ".subtraction($number1, $number2); break;
    case 'multiplication': echo "the number is: ".multiplication($number1, $number2); break;
    case 'division':echo "the number is: ". division($number1, $number2); break;

}

// functions
function sum ($number1, $number2){
    return   $number1 + $number2;
}
function  subtraction ($number1, $number2){
    return $number1 - $number2;
}
function multiplication ($number1, $number2)
{
    return $number1 * $number2;
}
 function division ($number1, $number2){

   if ($number2 != 0 )
       return $number1 / $number2;
   else
       return   " you can not divide  a number between   zero ";
 }

?>