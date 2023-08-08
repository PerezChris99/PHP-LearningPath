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
?>