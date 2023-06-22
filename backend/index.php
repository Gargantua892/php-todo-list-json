<?php

// Garantisce l'accesso al frontend
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

//serve per leggere il contenuto di un file e lo restituisce come stringa
$toDoStr = file_get_contents('data.json');
$toDo = json_decode($toDoStr);

echo ($toDoStr);
