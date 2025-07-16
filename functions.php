<?php

$password = "";

if (isset($_GET['password'])) {

    $minuscole = 'abcdefghijklmnopqrstuvwxyz';
    $maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '1234567890';
    $simboli = '!?~@#-_+<>[]{}';

    //racchiudo tutti i caratteri necessari in una variabile
    $tuttiCaratteri = $minuscole . $maiuscole . $numeri . $simboli;


    for ($i = 0; $i < $_GET['password'];$i++) {
        //Prende carattere random da questa stringa
        $randomPosition = rand(1, strlen($tuttiCaratteri) - 1);
        $randomCharacter = substr($tuttiCaratteri, $randomPosition, 1);
        //aggiunge questo carattere alla stringa della password per tot volte
        $password .= $randomCharacter;
    }
    echo $password;
}
