<?php
// Предложение 1 - Сортировка по Id с использованием готовых функци

class Element
{
    public int $id;
    public string $name;

    public function __construct(int $id, string $name)
    {
        $this->name = $name;
        $this->id = $id;
    }
}

$elementsArray = [
    new Element(434, 'Element434'),
    new Element(33, 'Element 33'),
    new Element(22, 'Element 22'),
    new Element(434, 'Element 434'),
    new Element(22, 'Element 22'),
];

function sortById(array &$elements, string $field, string $sortOrder = 'DESC'): bool
{
    return usort($elements, function (Element $firstElement, Element $secondElement) use ($sortOrder, $field) {
        if ($sortOrder == 'DESC')
            return $firstElement->$field > $secondElement->$field;
        else
            return $firstElement->$field < $secondElement->$field;
    });
}

sortById($elementsArray, 'id', 'DESC');

print_r($elementsArray);
