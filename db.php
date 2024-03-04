<?php

$le_avventure_di_topolino = new Production(
    "le avventure di topolino",
    "Italiano",
    5,
    new Genre("cartoon", "Topolino e i suoi amici in giro per il mondo")
);

$star_wars = new Production(
    "star wars",
    "Inglese",
    12,
    new Genre("fantasy", "la guerra dell universo")
);

$gabriele_va_in_campeggio = new Production(
    "Gabriele va in campeggio",
    "spagnolo",
    10,
    new Genre("documentario", "un maitre sardo in giro per il mondo")
);


$films = [
    $le_avventure_di_topolino,
    $star_wars,
    $gabriele_va_in_campeggio
];
var_dump($films);
