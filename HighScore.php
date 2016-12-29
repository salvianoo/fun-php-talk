<?php

require 'Collection.php';

// The problem
//
// Get the player with greater score
$players = new Collection([
  ['name' => 'Steve', 'score' => 6.2],
  ['name' => 'Bruce', 'score' => 8.2],
  ['name' => 'Peter', 'score' => 7.2],
]);

$compareScore = function ($p1, $p2){
	return ($p1['score'] > $p2['score']) ? $p1 : $p2;
};

//$winningPlayer = array_reduce($players, $compareScore);
$winningPlayer = $players->reduce($compareScore);

var_dump($winningPlayer);
