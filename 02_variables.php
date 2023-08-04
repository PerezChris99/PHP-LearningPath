<?php
/*----php data types---*/
/* 
-string series of characters surrounded by quotes
-integer whole numbers
-float decimal numbers
-boolean true or false
-array special variable, which can hold more than one element or value
-object a class
-NULL emplty variable
-Resource special variable that holds a resource
*/
$name = 'Perez'; //String
$age = 23; //Integer
$WalMart = true; //Boolean
$cash_on_hand = 2.75; //Float

// var_dump($name); //

echo $name . ' is ' . ' $age years old';

echo "$name is $age years old";

echo '5' + '5';
$x = '5' + '5';
var_dump($x);
echo 10 - 5;
echo 10 / 2;
echo 10 % 3;

// CONSTANTS
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;










?>
