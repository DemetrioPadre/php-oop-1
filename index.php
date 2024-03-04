<?php
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
        int $vote
    ) {

        //richiamiamo le funzioni
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

</body>

</html>