<?php
// importo la classe 'Movie'
require_once('Movie.php');

// due oggetti 'Movie'
$movie1 = new Movie("Il Signore degli Anelli", "Peter Jackson", 2001);
$movie2 = new Movie("Inception", "Christopher Nolan", 2010);

// Stampo le informazioni dei film
echo "Film 1:<br>";
$movie1->printInfo();
echo "<br>";

echo "Film 2:<br>";
$movie2->printInfo();
?>