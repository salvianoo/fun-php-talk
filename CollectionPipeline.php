<?php

require 'Collection.php';
require 'MoviesDataset.php';

$moviesCollection = new Collection($movies);

//Collection Pipeline
$result = $moviesCollection
    ->filter(function($movie) {
        return $movie['year_release'] >= 1970 && $movie['year_release'] < 1980;
    })
    ->filter(function($movie) {
        return $movie['rating'] > 8.0;
    })
    ->map(function($movie) {
        return "${movie['rank']} - ${movie['title']}";
    });

echo $result;
