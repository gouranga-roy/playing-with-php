<?php

    // $students = [
    //     [
    //         'id'    => 5698,
    //         'first_name'    => 'Gouranga',
    //         'last_name'     => 'Roy'
    //     ],
    //     [
    //         'id'    => 5684,
    //         'first_name'    => 'Chondon',
    //         'last_name'     => 'Roy',
    //     ],
    //     [
    //         'id'    => 4524,
    //         'first_name'    => 'Uttam',
    //         'last_name'     => "Roy"
    //     ]
    // ];

    // $last_name = array_column($students, 'first_name', '0');
    // print_r($last_name);


    $fname = ['pater', 'ben', 'joe','joe'];
    // $age = [30,50, 20];
    // $c = array_combine($fname, $age);
    // print_r($c);

    print_r(array_count_values($fname));


?>