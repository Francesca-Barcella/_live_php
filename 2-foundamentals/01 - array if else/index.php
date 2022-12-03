<?php
/* inserire le parole all'interno di un array, controlalre se la parola passata dall'utente tramite un form è presente nell'array */


$parole = ['albero', 'casa', 'auto', 'tv'];

var_dump($_GET);
//restituisce un array vuoto

var_dump($_GET['parola']);
//restituisce null

var_dump(empty ($_GET['parola']));
//restituisce true perchè verifica se il form è vuoto

if (empty ($_GET['parola'])){
    echo 'inserisci una parola';
} else {

    // in_array (cosa devo cercare, dove devo cercare) 
    if (in_array($_GET['parola'], $parole)){
        echo 'ho trovato la parole';
    } else {
        echo 'non ho trovato la parola';
    }
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php">
        <div>
            <label for="parola">Parola:</label>
            <input type="text" name="parola" id="parola">
        </div>
        <div>
            <button type="submit">Invio</button>
        </div>
    </form>
</body>
</html>