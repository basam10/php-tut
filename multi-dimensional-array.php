<?php
$students = [
    "abcd" => [
        "name" => "Basam Alhasan",
        "age" => 21,
        "ijk" => [
            "school" => "The Vision",
            "mno" => [
                "building-info" => [
                    "room-size" => "12x12",
                    "paint-color" => "orange",
                    "area" => "Abrantie"
                ],
                "uvw" => "Hello world"
            ]
        ]
    ]
];

$building_info = $students["abcd"]["ijk"]["mno"]["uvw"];

// $first_key = $students[1];

echo json_encode($building_info);