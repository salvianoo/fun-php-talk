<?php

// abstract class Collection Movies
// class MoviesCollection extends Collection
class Collection
{
    private $arr;
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function filter($callback)
    {
        return new Collection(
            array_filter($this->arr, $callback)
        );
    }

    public function map($callback)
    {
        return new Collection(
            array_map($callback, $this->arr)
        );
    }
    
    public function reduce($callback)
    {
        return new Collection(
            array_reduce($this->arr, $callback)
        );
    }
    
    public function __toString()
    {
        return implode(PHP_EOL, $this->arr) . PHP_EOL;
    }
}
