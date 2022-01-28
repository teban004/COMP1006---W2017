<?php

    class gamesAPI {

        function Select($gameID='%', $limitResults=10) {
            require_once 'database.php';

            $games = array();
            $query = "SELECT `Id`, `Name`, `Cost` FROM `Games` WHERE `Id` LIKE :gameID ORDER BY `Id` DESC LIMIT 0, :limitResults;";
            
            try {
                $statement = $db->prepare($query);
            } catch(Exception $e) {
                $message = $e->getMessage();
                echo "An error occurred: " . $message;
                exit;
            }
            
            $statement->bindValue(':gameID', $gameID, PDO::PARAM_STR);
            $statement->bindValue(':limitResults', $limitResults, PDO::PARAM_INT);
            $statement->execute();
            $gamesResults = $statement->fetchAll();
            $i = 0;
            $games = array();
            foreach( $gamesResults as $priceRow) {
                $i++;
                $games[$i] = array(
                    'game_id' => $priceRow['Id'],
                    'game_name'    => $priceRow['Name'],
                    'game_cost'            => $priceRow['Cost']
                );
            }

            return json_encode($games);
        }

    }

    $gamesAPI = new gamesAPI;
    header('Content-Type: application/json');
    echo $gamesAPI->Select();

?>