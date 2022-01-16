<?php
include_once('database.php;');

$gameID = $_POST['IDTextField'];
$gameName = $_POST['NameTextField'];
$gameCost = $_POST['CostTextField'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update database</title>
</head>
<body>

<?php
 echo "<p>Values:</p>" . $gameID . " " . $gameName . " " . $gameCost;
?>
    
</body>
</html>