<?php

$password = "";

//se è settato il parametro di lunghezza della password
if (isset($_GET['length'])) {
    //genera la password
    $minuscole = 'abcdefghijklmnopqrstuvwxyz';
    $maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '1234567890';
    $simboli = '!?~@#-_+<>[]{}';

    //racchiudo tutti i caratteri necessari in una variabile
    $tuttiCaratteri = $minuscole . $maiuscole . $numeri . $simboli;
    // prende la posizione del carattere che va da 0 alla lunghezza totale -1
    $randomPosition = rand(0, strlen($tuttiCaratteri) - 1);
    //prende un carattere randomico
    $randomCharacter = substr($tuttiCaratteri, $randomPosition, 1);

    //aggiungere questo carattere alla stringa della password per tot volte
    for ($i = 0;$i < $_GET['length'];$i++) {

        $randomPosition = rand(0, strlen($tuttiCaratteri) - 1);
        //prende un carattere randomico
        $randomCharacter = substr($tuttiCaratteri, $randomPosition, 1);

        $password .= $randomCharacter;
    }

}
