
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COMP1006</title>
    <!-- CSS Section -->
    <link rel="stylesheet" href="./Scripts/lib/bootstrap/dist/css/bootstrap.min.css"/>
    <!-- <link rel="stylesheet" href="./Scripts/lib/font-awesome/css/fontawesome.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Content/app.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <h1>Video Games</h1>

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

                    $query = "SELECT * FROM Games";
                    $statement = $db->prepare($query);
                    $statement->execute(); // run on the db server
                    $games = $statement->fetchAll(); // returns an array for each row

                ?>

                <table class="table table-striped">
                    <caption>Games List</caption>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Cost</th>
                        <th><i class="fa fa-car"></i></th>
                        <th></th>
                    </tr>

                <?php
                    
                    foreach ($games as $game) {
                        echo "\n<tr>";
                        echo "<td>" . $game['Id'] . "</td>";
                        echo "<td>" . $game['Name'] . "</td>";
                        echo "<td>$" . $game['Cost'] . "</td>";
                        echo '<td><button class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i>Edit</button></td>';
                        echo '<td><button class="btn btn-danger"><i class="fa-regular fa-trash-can"></i>Delete</button></td>';
                        echo "</tr>";
                    }
                    
                ?>

                </table>

        </div>
        </div>
        
    </div>

    <!-- JavaScript Section-->
    <script src="./Scripts/lib/jquery/dist/jquery.min.js"></script>
    <script src="./Scripts/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./Scripts/app.js"></script>
</body>
</html>