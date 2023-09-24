<?php
class Movie {
    // Dichiarazione delle variabili di istanza
    public $title;
    public $director;
    public $year;

    // Costruttore
    public function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    // Metodo per stampare le informazioni del film
    public function printInfo() {
        echo "Titolo: " . $this->title . "<br>";
        echo "Regista: " . $this->director . "<br>";
        echo "Anno: " . $this->year . "<br>";
    }
}
?>