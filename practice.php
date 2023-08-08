<?php
    echo "Waguan";

    //variables
    $a = 10;
    $b = 70;

    echo $a;
    echo '<br>';
    echo '<hr>';

    echo $b;

    // operators
    $r = $a + $b;
    $r = $a * $b;
    $r = $a / $b;
    $r = $a % $b;

    //$r = $a % $b;
    echo "This is the result: " . $r;

    //conditional statements
    if($a > $b){
        echo "a is greater than b";
    }
    elseif($a == $b){
        echo "a is equal to b";
    }
    else{
        echo "a is smaller than b";
    }

    //arrays (a collection of data types, arrays start from zero)
    $index_array = ['a', 'b', 'c', 1234];

    echo $index_array[1];

    //associative arrays , have jey value pairs instead of indices

    $associative_array = ["pencils" => 4, "pens" => 10, "erasers" => 14];
    echo $associative_array["pens"];
    echo $associative_array["erasers"];
    echo $associative_array["pencils"];
    //associative arrays can be vice versa
    $associative_array = [1 => "erasers", 2 => "pens", 3 => "pencils"];
    echo $associative_array["1"];
    echo $associative_array["2"];
    echo $associative_array["3"];

    //loops, repetitive statements
    //for loops
    for($i = 0; $i < 20; $i++){
        echo $i;
    }
    for($i = 0; $i <= 20; $i++){
        echo $i;
    }
    echo '<br>';
    //while loops
    while($a < $b){
        echo $a;
        $a++;
    }
    echo '<br>';
    while($a <= $b){
        echo $a;
        $a++;
    }
    echo '<br>';
    //foreach loops
    foreach($associative_array as $ar){
        echo $ar;
    }
    //form handling
    //get request
    if(isset($_GET['username'])){
        echo "Hello  " . $_GET['username'];
    }
    //post request
    if(isset($_POST['username'])){
        echo "Hello" . $_POST['username'];
    }
    //request
    if(isset($_REQUEST['username'])){
        echo "Hello" . $_REQUEST['username'];
    }






















?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>