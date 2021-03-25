<?php
// Здесь я реализую сортировку вставками

require '5.php';

$elementsArray = [
    new Element(56, "Radom element"),
    new Element(32, "Random element 2"),
    new Element(57, "Random element 3"),
    new Element(156, "Radom element 145"),
];

// Реализация сортировки вставкой
function sortByInsert(array &$elements)
{
    $startRangeIndex = 1;
    while ($startRangeIndex < count($elements)) {
        if ($elements[$startRangeIndex]->id < $elements[$startRangeIndex - 1]->id) {
            $indexToInsert = searchIndexToInsert($elements, $elements[$startRangeIndex]->id);
            changePosition($elements, $startRangeIndex, $indexToInsert);
        }
        $startRangeIndex++;
    }
}

function searchIndexToInsert(array &$elements, int $valueSearch): int
{
    foreach ($elements as $index => $value) {
        if ($value->id > $valueSearch) {
            return $index;
        }
    }
}

function changePosition(array &$elements, int $indexInsertFrom, int $indexInsertAt): void
{
    $temp = $elements[$indexInsertAt];
    $elements[$indexInsertAt] = $elements[$indexInsertFrom];

    //  Смена данных массива начиная с позиции откуда мы вставляем значение до индекса вставляемого элемента
    for ($i = $indexInsertFrom; $i < $indexInsertAt; $i--) {
        $elements[$i] = $elements[$i - 1];
    }
    $elements[$indexInsertAt + 1] = $temp;
}

sortByInsert($elementsArray);

print_r($elementsArray);
