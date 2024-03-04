<?php
require_once __DIR__ . "/Genre.php";
//creo una class production 
class Production
{
    //dentro la class production abbiamo le variabili titolo lingua e voto
    public $title;
    public $language;
    public $vote;


    //ne determino una funzione per ogni variabile
    function __construct(
        string $title,
        string $language,
        int $vote,
    ) {

        //richiamiamo le funzioni
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
};
