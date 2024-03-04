<?php
require_once __DIR__ . "/Genre.php";
//creo una class production 
class Production
{
    //dentro la class production abbiamo le variabili titolo lingua e voto
    public $title;
    public $language;
    public $vote;
    public $genere;


    //ne determino una funzione per ogni variabile
    function __construct(
        string $title,
        string $language,
        int $vote,
        Genre $genere
    ) {

        //richiamiamo le funzioni
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genere = $genere;
    }
};
