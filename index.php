<?php
include 'example.php';

$movies = new SimpleXMLElement($xmlstr);

/* Pour chaque <character>, nous affichons un <name>. */
foreach ($movies->question->questions as $character) {
   echo $character->name, ' played by ', $character->actor, PHP_EOL;
}

?>