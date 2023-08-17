<?php

// That's for "Practice 1" task.
    function arrayManipulation(array $numbers): array
    {

        $uniqNum = array_unique($numbers);                                    // Remove all duplicates

        sort($uniqNum);                                                // Sorting

        $sum = array_sum($uniqNum);                                          // Sum of sorted array

        $average = (count($uniqNum) > 0) ? ($sum / count($uniqNum)) : 0;     // Average number of sorted array

        return [
            'uniqueNumbers' => $uniqNum,
            'sum' => $sum,
            'average' => $average,
        ];
    }

    //test array
    $testArray = [1, 2, 3, 4, 5, 6, 6, 1, 2, 1, 9];

    $results = arrayManipulation($testArray);

    echo "Unique numbers: " . implode(', ', $results['uniqueNumbers']) . PHP_EOL;
    echo "Sum: " . $results['sum'] . PHP_EOL;
    echo "Average: " . $results['average'] . PHP_EOL;

//================================================================================================================
// That's for "Practice 2" task.

    $studentsArray = [
        "Adam" => "C",
        "Alex" => "B",
        "Amanda" => "A",
        "Ben" => "E",
        "Clive" =>"F",
        "Dave" => "C",
        "Kile" => "A"
    ];

    // Here we can add a new student to our array.
    function arrayAssociation(String $name, String $grade): void
    {
        global $studentsArray;

        $studentsArray[$name] = $grade;
    }

    // This is how we find grade using a "key".
    function findGrade(String $name): ?string
    {
        global $studentsArray;

        return $studentsArray[$name] ?? null;
    }

    // Test of adding a new student
    arrayAssociation("Robin", "A");

    echo "Students: " . PHP_EOL;                                            // Print's full array of students
    print_r ($studentsArray);

    // Test of finding a grade
    $grade = findGrade("Robin");                                      // Print's a grade or a default answer
    echo "Student's grade is: " . ($grade ?? "Student not found") . PHP_EOL;

//================================================================================================================