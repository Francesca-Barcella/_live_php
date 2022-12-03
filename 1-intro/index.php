<?php

$name = $_GET['name'];
$lastName = $_GET['lastname'];

//come facevamo il template literal coi backtick qui lo possiamo fare con le virgolette
$greetings = "Ciao $name $lastName";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - intro</title>
</head>
<body>
    <!-- in questo modo poi dobbiamo aggiungere il valore nella stringa dell'url per stamparla in pagina -->
    <!-- http://localhost/PHP/_live_php/1-intro/?name=Francesca&lastname=Barcella -->
    <h1><?php echo $greetings ?></h1>
</body>
</html>