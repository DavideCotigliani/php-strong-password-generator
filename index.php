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
    if (isset($_GET['password'])) {
        //funzione
        function myPassword()
        {

        }
    }
    ?>
</body>
</html>