<?php
//Display the students information in the format below:
/*
    John Doe
    Age: 20
    Department: Computer Science
    • Math - 85 (A)
    • Programming - 92 (A+)

    .
    .
    .

*/

$students = [
    1 => [
        'name' => 'John Doe',
        'age' => 20,
        'department' => 'Computer Science',
        'subjects' => [
            'Math' => [
                'score' => 85,
                'grade' => 'A'
            ],
            'Programming' => [
                'score' => 92,
                'grade' => 'A+'
            ]
        ]
    ],

    2 => [
        'name' => 'Jane Smith',
        'age' => 21,
        'department' => 'Information Technology',
        'subjects' => [
            'Networking' => [
                'score' => 78,
                'grade' => 'B'
            ],
            'Database' => [
                'score' => 88,
                'grade' => 'A'
            ]
        ]
    ],

    3 => [
        'name' => 'Mark Lee',
        'age' => 19,
        'department' => 'Software Engineering',
        'subjects' => [
            'Algorithms' => [
                'score' => 90,
                'grade' => 'A+'
            ],
            'Web Development' => [
                'score' => 84,
                'grade' => 'A'
            ]
        ]
    ]
];

//soln
$studentInfo =$students[1][2][3];
foreach ($studentsInfo as $student){
    echo json_encode($student);
    foreach($student as $key =>$value){
         echo "$key: $value\n";
    };
};