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