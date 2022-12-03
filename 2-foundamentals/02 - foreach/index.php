<?php
/* stampare a schermo tutti gli elementi passati a get */

var_dump($_GET);

//se la variaible get è vuota
if (empty ($_GET)){
    //stampa questo
    echo 'il form non è stato ancora compilato';
//altrimenti
} else {
    //ciclo foreach dentro get -metto $key se voglio stamapre anche il nome delle chiavi oltre ai valori- 
    foreach ($_GET as $key => $item){
        //stampa i singoli item di get
        echo $key .'<br>';
        echo $item .'<br>';
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
    <form action="index.php" action="GET">
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
        </div>
        <div>
            <label for="name">Name</label>
            <input type="name" name="name" id="name">
        </div>
        <div>
            <label for="lastname">Lastname</label>
            <input type="lastname" name="lastname" id="lastname">
        </div>
        <div>
            <select name="skills" id="skills">
                <label for="skills"></label>
                <option value="js" disabled=disabled selected>Scegli</option>
                <option value="js">Js</option>
                <option value="php">php</option>
            </select>
        </div>
        <div>
            <button type="submit">Invia</button>
        </div>
    </form>

</body>

</html>