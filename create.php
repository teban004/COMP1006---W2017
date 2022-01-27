<?php
    require_once('database.php');

    $gameName = $_POST['NameTextField'];
    $gameCost = $_POST['CostTextField'];
    
    try{
        $query = "INSERT INTO Games SET Name = :game_name, Cost = :game_cost";
        $statement = $db->prepare($query);
        $statement->bindValue(':game_name', $gameName);
        $statement->bindValue(':game_cost', $gameCost);
        $statement->execute(); // run on the db server
        $gameID = $db->lastInsertId();
    }
    catch(PDOException $e) {
        $message = $e->getMessage();
        echo "An error occurred: " . $message;
    }
    
        $query = "SELECT * FROM Games WHERE Id = :game_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':game_id', $gameID);
        $statement->execute(); // run on the db server
        $game = $statement->fetch(); // returns an array for each row
        $statement->closeCursor();
<<<<<<< HEAD

        header('Location: ./'); // redirect to the current base folder

        
=======
    
        include 'index.php';
>>>>>>> 004cbb7da0aba1bb85ddf56f375c4922e7858324
?>
