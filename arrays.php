<?php
// $cars       = array("Volvo", "BMW", "Toyota");
// $new_cars   = ["Volvo", "BMW", "Toyota"];

// echo "----Array with array method-----\n";
// foreach ($cars as $my_car) {
//    echo "$my_car\n";
// }

// echo "----Array with square bracket-----\n";
// foreach ($new_cars as $my_car) {
//    echo "$my_car\n";
// }

// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car = array(19, 3, 5, 27);

// foreach ($car as $my_car) {
//     echo "$my_car\n";
// }

$names = ["basam", "Foster", "Alhassan"];
$numbers = [12, 5, 21, 35, 13, 7, 10]; //5,21,35,13,7
$our_odd_numbers = [];

// echo "\n" . 35 % 2;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        array_push($our_odd_numbers, $number);
    }
}

echo "\n" . json_encode($our_odd_numbers);