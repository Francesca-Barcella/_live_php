<?php
//STEP 1 - NON FUNZIONERA' - perchè il percorso in realtà è rotto perchè prende il percorso già usato nella parte header.php
//include '../vars.php';
//include '../text.php';
//perchè noi siamo al livello di partials e i 2 puntini ../ ci fanno uscire in 4-includes in cui però il file header.php non c'è perchè sta dentro alla cartella partials>template.

/* include './template/header.php'; */

//SOLUZIONE - COSTANTE MAGICA __DIR__ - da mettere sempre davanti all'include perchè va a prendere la cartella in cui si trova il file


include __DIR__ . '/partials/template/header.php';

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
  <h1>Ciao</h1>
</body>
</html>