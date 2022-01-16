<?php

require_once('database.php');

$gameID = $_POST['IDTextField'];
$gameName = $_POST['NameTextField'];
$gameCost = $_POST['CostTextField'];

try{
    $query = "UPDATE Games SET Name = :game_name, Cost = :game_cost WHERE Id = :game_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':game_id', $gameID);
    $statement->bindValue(':game_name', $gameName);
    $statement->bindValue(':game_cost', $gameCost);
    $statement->execute(); // run on the db server
}
catch(Exception $e) {
    $message = $e->getMessage();
    echo "An error occurred: " . $message;
}

    $query = "SELECT * FROM Games WHERE Id = :game_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':game_id', $gameID);
    $statement->execute(); // run on the db server
    $game = $statement->fetch(); // returns an array for each row
    $statement->closeCursor();

    include 'index.php';
?>

