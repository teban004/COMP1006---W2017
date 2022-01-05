<?php

    $gameID = $_GET["gameID"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COMP1006</title>
    <!-- CSS Section -->

    <!-- <link rel="stylesheet" href="./Scripts/lib/bootstrap/dist/css/bootstrap.min.css"/> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-- <link rel="stylesheet" href="./Scripts/lib/font-awesome/css/fontawesome.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="./Content/app.css"/>
</head>
<body>
    <?php echo $gameID; ?>
</body>
</html>