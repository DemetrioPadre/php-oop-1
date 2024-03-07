<?php
require_once __DIR__ . "/models/serietv.php";
require_once __DIR__ . "/models/movie.php";







//includere sia production che genre giusto per averli nel caso sposti tutto o ti vuoi portare dietro


$le_avventure_di_topolino = new Production(
    "Le avventure di topolino",
    "Italiano",
    5,
    new Genre("cartoon", "Topolino e i suoi amici in giro per il mondo"),
    "20€",
    50,
);

$star_wars = new Production(
    "Star wars",
    "Inglese",
    12,
    new Genre("fantasy", "la guerra dell universo"),
    "MILLEMILAMIONI",
    180,
);

$gabriele_va_in_campeggio = new Production(
    "Gabriele va in campeggio",
    "Spagnolo",
    10,
    new Genre("documentario", "un maitre sardo in giro per il mondo"),
    "GRATIS",
    120,
);
$Scrubs = new serieTV(
    "Scrubs",
    "USA",
    100,
    new Genre("commedia", "storia di un medico ai primi ferri"),
    10,
    20,
    "20€",
);


$films = [
    $le_avventure_di_topolino,
    $star_wars,
    $gabriele_va_in_campeggio,
    $Scrubs
];
var_dump($films);
