
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COMP1006</title>
    <!-- CSS Section -->
    <link rel="stylesheet" href="./Scripts/lib/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./Scripts/lib/font-awesome/css/fontawesome.css"/>
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
                    </tr>

                <?php
                    echo "<tr>";
                    foreach ($games as $game) {
                        echo "<td>" . $game['Id'] . "</td>";
                        echo "<td>" . $game['Name'] . "</td>";
                        echo "<td>$" . $game['Cost'] . "</td>";
                    }
                    echo "</tr>";
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