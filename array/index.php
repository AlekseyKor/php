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

    print_r('===================================================================' . PHP_EOL);

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

    print_r('===================================================================' . PHP_EOL);

//================================================================================================================
// That's for "Practice 3" task.

function arrayMapping (array $stringArray): array
{   // Here we filter all elements smaller than 5 characters
    $filteredArray = array_filter($stringArray, function ($string) {
        return strlen($string) >= 5;
    });
    // here we make all elements to upper case and mapping them
    return array_map('strtoupper',$filteredArray);
}

//example of arrayMapping function
$testMapping = ["beans", "cat", "coffee", "tea", "barrel", "rumble", "camel", "mercedes", "grapefruit"];
$result = arrayMapping($testMapping);
print_r($result);


function modifyArray(array $namesArray, string $oldName, string $newName): array
{
    // Check if old name exists in the array
    if (in_array($oldName, $namesArray)) {
        // Replace old name with new name using array_map
        $modifiedArray = array_map(function ($name) use ($oldName, $newName) {
            return ($name === $oldName) ? $newName : $name;
        }, $namesArray);
    } else {
        // Add new name to array
        $namesArray[] = $newName;
        $modifiedArray = $namesArray;
    }

    return $modifiedArray;
}

$namesArray = [];
$stop = false;

while (!$stop) {
    // Prompt user to enter a name
    $name = readline("Enter a name (Type 'stop' to finish): ");

    if ($name === "stop") {
        $stop = true; // Exit loop if user enters 'stop'
    } else {
        if (in_array($name, $namesArray)) {
            echo "Name already exists. Please enter a different name." . PHP_EOL;
        } else {
            $namesArray[] = $name; // Add the name to the array
        }
    }
}

echo "Original Names Array: " . implode(", ", $namesArray) . PHP_EOL;

$oldName = readline("Enter the name to replace: ");
$newName = readline("Enter the new name: ");

$modifiedNames = modifyArray($namesArray, $oldName, $newName);

echo "Modified Names Array: " . implode(", ", $modifiedNames) . PHP_EOL;