<?php

    class gamesAPI {

        function Select($gameID='%', $limitResults=10) {
            require_once '../database.php';

            $games = array();
            $query = "SELECT * FROM Games WHERE `Id` LIKE :gameID ORDER BY `Id` ASC LIMIT 0, :limitResults;";
            
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(':gameID', $gameID, PDO::PARAM_STR);
                $statement->bindValue(':limitResults', $limitResults, PDO::PARAM_INT);
                $statement->execute();
                $gamesResults = $statement->fetchAll();
                $i = 0;
                $games = array();
                foreach( $gamesResults as $gameRow) {
                    $i++;
                    $games[$i] = array(
                        'game_id'    => $gameRow['Id'],
                        'game_name'  => $gameRow['Name'],
                        'game_cost'  => $gameRow['Cost']
                    );
                }

                return json_encode($games);
            } catch(Exception $e) {
                $message = $e->getMessage();
                echo "An error occurred: " . $message;
                exit;
            }
            
            
        }

    }

    $gamesAPI = new gamesAPI;
    header('Content-Type: application/json');
    echo $gamesAPI->Select();

?>