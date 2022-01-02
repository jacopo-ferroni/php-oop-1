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

$firtsMovie = new Movie('Spider Man 1', 45, 'ita');
echo $firtsMovie->nome;
echo '<br>';

echo $firtsMovie->id;
echo '<br>';

echo $firtsMovie->leng;

echo '<hr>';

$firtsMovie = new Movie('Spider Man 2', 465, 'ita');
echo $firtsMovie->nome;
echo '<br>';

echo $firtsMovie->id;
echo '<br>';

echo $firtsMovie->leng;

echo '<hr>';

$firtsMovie = new Movie('Spider Man 3', 345, 'ita');
echo $firtsMovie->nome;
echo '<br>';

echo $firtsMovie->id;
echo '<br>';

echo $firtsMovie->leng;

echo '<hr>';


