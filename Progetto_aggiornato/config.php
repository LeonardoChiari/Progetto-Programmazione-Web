<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "Oak_Store";

$connessione = new mysqli($host, $user, $password, $db);

if ($connessione === false) {
    die("Errore di connessione: " . $connessione->connect_error);
}

?>