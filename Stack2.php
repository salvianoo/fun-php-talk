<?php

class Stack
{
    //private $items;

    public function create($items = [])
    {
        $this->items = $items;

        return array(
            'push' => function($item) {
                $this->items[] = $item;
            },
            'getItems' => function() {
                return $this->items;
            }
        );
    }
}

$stack = (new Stack())->create();

$stack['push']('uva');
$stack['push']('banana');
$stack['push']('morango');

var_dump( $stack['getItems']() );

//$pessoa = Pessoa('Salviano');
//var_dump($pessoa['getName']());
