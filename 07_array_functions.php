<?php
    $fruits = ['apple', 'orange', 'pear'];

    // get length
    echo count($fruits);

    // search array
    var_dump(in_array('apple', $fruits));

    // add to array
    $fruits[] = 'grapes';

    print_r($fruits);

    // another way of adding to array
    $fruits[] = 'grapes';
    array_push($fruits, 'blueberry', 'strawberry');
    print_r($fruits);

    // adding to the begining of the array
    $fruits[] = 'grapes';
    array_unshift($fruits, 'mango');
    print_r($fruits)

    //remove from the end of the array
    //array_pop($fruits);

    // removes from the beginning of the array
    //array_shift($fruits);

    // removing specific elements from the array
    //unset($fruits[2]);

    //splitting it into chunks of two
    //$chunked_array = array_chunk($fruits, 2);

    //print_r($chunked_array);
    //print_r($fruits);

    //array concatenation 

    //$arr1 = [1,2,3];
    //$arr2 = [4,5,6];

    //$arr3 = array_merge($arr1, $arr2)
    //$arr4 = [...$arr1];

    //print_r($arr3);

    //combine arrays
    //$a = ['green', 'red', 'yellow'];
    //$b = ['avocado', 'apple', 'banana'];

    //$c = array_combine($a, $b);

    //print_r($c);

    //$keys = array_keys($c);
    //print_r($keys);







?>