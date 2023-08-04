<?php
    //Simple array
    $numbers = [1,44,55,22];
    $fruits = array('apple', 'orange', 'pear');

    var_dump($numbers);
    // echo $fruits[1];

    // Associate array
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];
    // echo $colors[4];

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];

    // echo $hex['blue'];

    $person = [
        'first_name' => 'John',
        'last_name' => 'Smith',
        'email' => 'john@example.com',
    ];

    // echo $person['first_name'];

    // multidimensional array
    $people = [
        [
         'first_name' => 'John',
         'last_name' => 'Smith',
         'email' => 'john@example.com',
        ],
        [
         'first_name' => 'Kelly',
         'last_name' => 'Wu',
         'email' => 'kelly@example.com',
        ],
        [
         'first_name' => 'Sammy',
         'last_name' => 'Jake',
         'email' => 'sammy@example.com',
        ]
    ];

    // echo $people[1]['email'];
    var_dump(json_encode($people));
    