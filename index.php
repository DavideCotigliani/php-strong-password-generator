<?php
require_once './functions.php';

//redirect alla pagina result
if ($password != "") {
    session_start();
    //salviamo la password in una variabile di sessione
    $_SESSION['password'] = $password;
    //dirottiamo l'utente alla pagina password
    header("Location: ./password.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Generatore di password</title>
</head>
<body>
    <h1>Genera una password sicura</h1>
    <form action="" method="GET">
            <div class="container d-flex gap-2">
                <input type="number" min="6" max="22" name="length" value="6" placeholder="Inserisci la tua password"> Lunghezza della password
                <br>
                <input type="checkbox" name="letters"> <label for="letters">Lettere</label>
                <input type="checkbox" name="numbers">  <label for="numbers">Numeri</label>
                <input type="checkbox" name="symbols"> <label for="symbols">Simboli</label>
                <button type="submit">Genera</button>
            </div> 
    </form>
    <?php
if ($password != "") {      //controllo per vedere se la password c'è, se c'è quindi non è vuota mostra questo
    ?>
    <h2>La tua password  di <?php echo $_GET['length']?>: caratteri</h2>
    <pre> <?php echo $password ?> </pre>
    <?php
}
?>
</body>
</html>