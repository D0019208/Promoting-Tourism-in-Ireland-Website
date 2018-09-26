<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Create Database Table Example</title>
</head>
<body>

<?php
/* Include "configuration.php" file */
require_once "configuration_marker.php";



/* Connect to the database */
$dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   // set the PDO error mode to exception



/* If the table already exists, then delete it */
$query = "DROP TABLE IF EXISTS users";
$statement = $dbConnection->prepare($query);
$statement->execute();



/* Create table */
$query = "CREATE TABLE 'markers' (
  'id' INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  'name' VARCHAR( 60 ) NOT NULL ,
  'address' VARCHAR( 80 ) NOT NULL ,
  'lat' FLOAT( 10, 6 ) NOT NULL ,
  'lng' FLOAT( 10, 6 ) NOT NULL ,
  'type' VARCHAR( 30 ) NOT NULL
);" ;

$statement = $dbConnection->prepare($query);
$statement->execute();



/* Provide feedback to the user */
echo "Table 'markers' created.";
?>

</body>
</html>