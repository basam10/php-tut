<?php
/*
    name: ...
    class: ....
*/
$data = [
    "school" => "The Vision School",
    "students" => [
        ["name" => "Basam", "class" => "Basic 6"],
        ["name" => "Foster", "class" => "Basic 2"],
        ["name" => "Basim", "class" => "Basic 1"],
    ]
];

$students = $data["students"];

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "$key: $value\n";
    }
}