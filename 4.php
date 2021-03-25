<?php
// Исходный массив
$sortArray = [5, 7, 11, 15];

// Исходное число поиска
$sourceNumber = 6;

$sortedArrayFilter = array_filter($sortArray, function (int $element) use ($sourceNumber) {
    return $element > $sourceNumber;
});

// Берем первые три числа, удовлетворяющих поиску
$result = array_slice($sortedArrayFilter, 0, 3);

print_r($result);
