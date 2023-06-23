<?php

// Garantisce l'accesso al frontend
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');


//dal metodo deleteTask(index) in app, mettiamo nella variabile $index il valore passato
$index = $_POST['index'];

//LETTURA
//prendiamo il file data.json e convertiamo in stringa il risultato
$taskStr = file_get_contents("data.json");

//da definizione ufficiale: "Takes a JSON encoded string and converts it into a PHP value."
$tasks = json_decode($taskStr);

//si toglie l'elemento desiderato dall'array "decodificato" (passaggio sopra ^)
array_splice($tasks, $index, 1);

//riconvertiamo il nostro array in json - Definizione: "Returns a string containing the JSON representation of the supplied value. If the parameter is an array or object, it will be serialized recursively."
$taskStr = json_encode($tasks);

//SCRITTURA (vuole 2 parametr: dove vogliamo scrivere e cosa vogliamo scrivere)
//Re inseriamo l'array stringa (privo dell'elemento che è stato tolto eseguendo la funzione)
file_put_contents("data.json", $taskStr);

//stampiamo il contenuto dell'array aggiornato
echo $taskStr;



