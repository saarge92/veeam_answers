<?php
// Исходный массив
$sortArray = [5, 7, 11, 15];

// Исходное число поиска
$sourceNumber = 6;
$countElementToFind = 3;


function search(array $searchArray, int $sourceNumber, int $countToSearch): array
{
    $resultArray = [];
    foreach ($searchArray as $element) {
        if ($element > $sourceNumber) {
            if (count($resultArray) < 3) {
                $resultArray[] = $element;
            } else
                break;

        }
    }
    return $resultArray;
}

$result = search($sortArray, 7, 3);

print_r($result);
