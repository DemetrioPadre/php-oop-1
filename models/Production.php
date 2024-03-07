<?php
require_once __DIR__ . "/Genre.php";
require_once __DIR__ . "/serietv.php";
require_once __DIR__ . "/movie.php";

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
        $this->set_title($title);
        $this->language = $language;
        $this->vote = $vote;
        $this->genere = $genere;
    }
    public function set_title($title)
    {
        if (empty($title) || !is_string($title))
            return;
        $this->title = ucfirst($title);
    }
    public function get_title()
    {
        return $this->title;
    }
};
