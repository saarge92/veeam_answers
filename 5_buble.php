<?php
// Здесь я попробую реализовать алгоритм пузырьковой сортировки в ручную

require '5.php';


$elementsArray = [
    new Element(434, 'Element434'),
    new Element(33, 'Element 33'),
    new Element(22, 'Element 22'),
    new Element(434, 'Element 434'),
    new Element(22, 'Element 22'),
];

// Реализация сортировкой
function bubbleSort(array &$elements, string $fieldName, string $order = 'DESC'): void
{
    do {
        $swapped = false;
        for ($i = 1; $i < count($elements); $i++) {
            $rightElement = $elements[$i];
            $leftElement = $elements[$i - 1];
            if ($order == 'ASC') {
                if ($leftElement->$fieldName > $rightElement->$fieldName) {
                    swap($elements, $i - 1, $i);
                    $swapped = true;
                }
            } else {
                if ($leftElement->$fieldName < $rightElement->$fieldName) {
                    swap($elements, $i, $i - 1);
                    $swapped = true;
                }
            }
        }
    } while ($swapped != false);
}

function swap(array &$elements, int $indexLeft, int $indexRight)
{
    $temp = $elements[$indexLeft];
    $elements[$indexLeft] = $elements[$indexRight];
    $elements[$indexRight] = $temp;
}

bubbleSort($elementsArray, 'id', 'ASC');
print_r($elementsArray);
