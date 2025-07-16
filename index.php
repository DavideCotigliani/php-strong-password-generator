<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Genera una password sicura</h1>
    <form action="" method="GET">
            <div class="container d-flex gap-2">
                <h2>Lunghezza della password</h2>
                <input type="number" min="6" max="22" name="password" placeholder="Inserisci la tua password">
                <button type="submit">Invia</button>
            </div> 
    </form>
    <?php
        $password = "";
    if ($password != "") {
        ?>
    <h2>La tua password:</h2>
    <pre> <?php echo $password ?> </pre>
    <?php
    }
    ?>

    <?php
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
    ?>
</body>
</html>