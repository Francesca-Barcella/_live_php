<?php
/* tramite un form inserire una stringa al server.
Se la variabile password passata in GET è uguale a "boolean" stampare una stringa verde, altrimetni stampare una stringa rossa. */

if (empty($_GET['parola'])) {
    echo 'inserisci la parola';
} else {
    $parola = $_GET['parola'];
    if ($_GET['parola'] === 'boolean') {
        $class = 'green';
    } else {
        $class = 'red';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form&string</title>

    <style>
        .red {
            color: red;
        }

        .green {
            color: green;
        }
    </style>
</head>

<body>
    <form action="index.php" method="GET">
        <div>
            <label for="parola">Inserisci una parola</label>
            <input type="text" name="parola" id="parola">
        </div>
        <div>
            <button type="submit">Invia</button>
        </div>
    </form>
    <!-- aggiungere una condizionale all'h1 per stamparlo solo se  -->

    <!--  
    apro php + condicionale con < ? p h p 
    se GET è settata (isset) e non è vuota (!empty)
    chiudo php con : ? > 
    -->
    <?php if (isset($_GET['parola']) && !empty($_GET['parola'])) : ?>
        <!-- interrompo php e inizio html per stampare h1-->
        <h1 class="<?php echo $class ?>">la parola che hai inserito è: <?php echo $parola ?></h1>
    <!-- chiudo php + condicionale-->
    <?php endif ?>
</body>

</html>