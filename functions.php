<?php

$password = "";

//se è settato il parametro di lunghezza della password
if (isset($_GET['length'])) {
    //genera la password
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $numbers = '1234567890';
    $symbols = '!?~@#-_+<>[]{}';

    $allChars = "";
    //controllo se inserire le lettere
    if (isset($_GET['letters']) && $_GET['letters'] == "on") {
        $allChars .= $letters;
    }

    //controllo se inserire i numeri
    if (isset($_GET['numbers']) && $_GET['numbers'] == "on") {
        $allChars .= $numbers;
    }

    //controllo se inserire i simboli
    if (isset($_GET['symbols']) && $_GET['symbols'] == "on") {
        $allChars .= $symbols;
    }


    //racchiudo tutti i caratteri necessari in una variabile
    // $tuttiCaratteri = $letters . $numbers . $symbols;

    // prende la posizione del carattere che va da 0 alla lunghezza totale -1
    $randomPosition = rand(0, strlen($allChars) - 1);
    //prende un carattere randomico
    $randomCharacter = substr($allChars, $randomPosition, 1);

    //aggiungere questo carattere alla stringa della password per tot volte
    for ($i = 0;$i < $_GET['length'];$i++) {

        $randomPosition = rand(0, strlen($allChars) - 1);
        //prende un carattere randomico
        $randomCharacter = substr($allChars, $randomPosition, 1);

        $password .= $randomCharacter;
    }



}
