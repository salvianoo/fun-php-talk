<?php

class Items
{
    private $items;
    public function __construct($items=[])
    {
        $this->items = $items;
    }
    public function push($item)
    {
        $this->items[] = $item;
    }
    public function getItems()
    {
        return $this->items;
    }
}

function Stack(Items $items) {
    return array(
        'push' => function($item) use ($items) {
            $items->push($item);
        },
        'getItems' => function() use ($items) {
            return $items->getItems();
        }
    );
}

$stack = Stack(new Items());

$stack['push']('uva');
$stack['push']('banana');
$stack['push']('morango');

var_dump( $stack['getItems']() );
