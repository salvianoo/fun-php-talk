<?php

require 'MoviesDataset.php';

$filmes70s = array_filter($movies, function($movie) {
    return $movie['year_release'] >= 1970 && $movie['year_release'] < 1980;
});

$filmes70_e_rating8 = array_filter($filmes70s, function($movie) {
    return $movie['rating'] > 8.0;
});

$movies_rank_e_title = array_map(function($movie) {
    return "${movie['rank']} - ${movie['title']}";
}, $filmes70_e_rating8);

// var_dump($movies_rank_e_title);


// Selecionar (rank e titulo) os filmes da decada de 70 com nota acima de 8.0
$filmes = [];
foreach ($movies as $movie) {
    if ($movie['year_release'] >= 1970 && $movie['year_release'] < 1980) {
        if ($movie['rating'] > 8.0) {
            // adicionar somente o rank e titulo
            $filmes[] = array(
                'rank' => $movie['rank'],
                'title' => $movie['title']
            );
        }
    }
}

foreach ($filmes as $filme) {
    echo "${filme['rank']} - ${filme['title']}" . PHP_EOL;
}
