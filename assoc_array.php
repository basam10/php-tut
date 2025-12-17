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

$studentsInfo = $data["students"];

foreach ($studentsInfo as $student) {
    // echo json_encode($student);
    // foreach ($student as $item) {
    //    echo $item . "\n";
    // }
    foreach ($student as $key => $value) {
        echo "$key: $value\n";
    }
}