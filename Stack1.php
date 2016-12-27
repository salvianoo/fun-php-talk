<?php

function Stack() {
    //private $items;
    $items = [];

    return array(
        'push' => function($item) use ($items) {
            $items[] = $item;
        },
        'getItems' => function() use ($items) {
            return $items;
        }
    );
}

$stack = Stack();

$stack['push']('uva');
$stack['push']('banana');
$stack['push']('morango');

var_dump( $stack['getItems']() );
