<?php

// Garantisce l'accesso al frontend
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');


$file = "data.json";

//recupera il metodo post di axios nel frontend
$newTask = $_POST;

//Legge il file data.json nella cartella "backend"
$dataStr = file_get_contents($file);

//Converte l'import in stringa
$data = json_decode($dataStr);

// si crea un array che conterrà la variabile $newTask (valorizzata con la chiamata post)
$data[] = $newTask;

//Trasformazione dei dati in formato json (encoded)
$encData = json_encode($data);

//Inserire il contenuto all'interno del nostro file data.json
file_put_contents($file, $encData);

//stampa a video gli elementi
echo $encData;