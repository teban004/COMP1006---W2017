<?php

$dsn = 'mysql:host=localhost;dbname=gameDB';
$userName = 'gameusr';
$password = 'EASportsKonami-2022';

try {
    $db = new PDO($dsn, $userName, $password);
}
catch(PDOException $e) {
    $message = $e->getMessage();
    echo "An error occurred: " . $message;
}


?>