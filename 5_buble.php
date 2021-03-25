<?php
// Здесь я попробую реализовать алгоритм пузырьковой сортировки в ручную

require '5.php';


$elementsArray = [
    new Element(56, "Radom element"),
    new Element(32, "Random element 2"),
    new Element(57, "Random element 3"),
    new Element(156, "Radom element 145"),
];

// Реализация сортировкой
function bubbleSort(array &$elements, string $fieldName, string $order = 'DESC'): void
{
    $swapped = false;
    while (!$swapped) {
        $swapped = false;
        for ($i = 1; $i < count($elements); $i++) {
            $rightElement = $elements[$i];
            $leftElement = $elements[$i - 1];
            if ($leftElement->$fieldName > $rightElement->$fieldName) {
                swap($elements, $i - 1, $i);
                $swapped = true;
            }
        }
    }
}

function swap(array &$elements, int $indexLeft, int $indexRight)
{
    $temp = $elements[$indexLeft];
    $elements[$indexLeft] = $elements[$indexRight];
    $elements[$indexRight] = $temp;
}

bubbleSort($elementsArray, 'id');
print_r($elementsArray);
