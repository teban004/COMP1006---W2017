
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
                <h1>PHP with MySQL</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quibusdam dignissimos dolorem illum exercitationem itaque ex similique quae officia blanditiis cum optio voluptates hic sunt temporibus beatae, ipsum sint debitis?</p>
            </div>
        </div>
        
    </div>

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

    foreach ($games as $game) {
        echo "<p>" . $games['Name'] . "</p>";


?>


    <!-- JavaScript Section-->
    <script src="./Scripts/lib/jquery/dist/jquery.min.js"></script>
    <script src="./Scripts/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./Scripts/app.js"></script>
</body>
</html>