<?php

//sintassi dichiarazione function
function nome_funzione($param1, $param2)
{
    //codice
}

//dichiaro funzione
function reverseWord($word)
{
    var_dump($word);
    //return per far uscire il valore
    return strrev($word);
}

//invoco la funzione
//reverseWord('Francesca');

//aggiungo la variabile all'invocazione per salvare/stampare all'esterno il return
$revWord = reverseWord('Francesca');
var_dump($revWord);

function dd(...$params)
//dd - die & dump - stampa e muori
{
    var_dump($params);
    foreach ($params as $param) {
        var_dump($param);
    }
    die;
    //die - muori - da qui in poi non stampa più nulla!
}

//dd(4, 5, 'string');
// questo var_dump non verrà stampatao perchè ci troviamo dopo il die!!
var_dump('ciao ciao');

//function scope
$now = 2022;
function calcAge($yob){
    $name = 'Francesca';
    //questa non è definita perchè è esterna alla
    var_dump($now);

    var_dump($name);
    var_dump($yob);
}
//se faccio il vardump fuori ovviamente lo prende e funziona
var_dump($now);
calcAge(1979);




