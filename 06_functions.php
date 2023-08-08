<?php
    function registerUser() {
        echo 'User registered';
    } 

    registerUser();

    function sum($n1, $n2) {
        return $n1 + $n2;
    }

    /*either*/
    echo sum(5, 5);
    /* or*/
    $number = sum(5, 5);
    echo $number; 

    $subtract = function($n1, $n2) {
        return $n1 = $n2;
    };

    //echo $subtract(10, 5);

    //$multiply = fn($n1, $n2) => $n1 * $n2;

    //echo $multiply(9,9);
?>