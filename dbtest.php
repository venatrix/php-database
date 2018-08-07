<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("username");
$dbpwd = getenv("password");
$dbname = getenv("database_name");

$connection = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));

$query = "SELECT * from users" or die("Error in the consult.." . mysqli_error($connection));

echo " List of users created on database: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo "User Id: ".$row['user_id'] . " User Name: " . $row['username'] . "<br>";
}
echo "End of the list <br>";

mysqli_close($connection);

?>
