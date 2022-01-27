<?php

require_once('database.php');

$gameID = $_GET['gameID'];

try{
    $query = "DELETE FROM Games WHERE Id = :game_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':game_id', $gameID);
    $statement->execute(); // run on the db server
}
catch(PDOException $e) {
    $message = $e->getMessage();
    echo "An error occurred: " . $message;
}

header('Location: ./'); // redirect to the current base folder
?>

