<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
class Movie {
    public $nome;
    public $id;
    public $leng;

    function __construct($nome_film, $numero_id, $lingua) {

        $this->nome = $nome_film;
        $this->id = $numero_id;
        $this->leng = $lingua;
    }
}

$firstMovie = new Movie('Spider Man 1', 45, 'ita');
var_dump($firstMovie);

echo '<hr>';

$secondMovie = new Movie('Spider Man 2', 465, 'ita');
var_dump($secondMovie);

echo '<hr>';

$thirdMovie = new Movie('Spider Man 3', 345, 'ita');
var_dump($thirdMovie);

echo '<hr>';


