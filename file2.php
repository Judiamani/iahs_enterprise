<?php

// server info
$server = 'localhost';
$user = 'iahsconnect';
$pass = 'iahsconnect@727';
$db = 'iahs';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

// confirm that the 'id' variable has been set
if (isset($_GET['id_art']) && is_numeric($_GET['id_art']))
{
// get the 'id' variable from the URL
$id_art = $_GET['id_art'];

// delete record from database
if ($stmt = $mysqli->prepare("DELETE FROM articles WHERE id_art = ? LIMIT 1"))
{
$stmt->bind_param("i",$id_art);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$mysqli->close();

// redirect user after delete is successful
header("Location: index4.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: index4.php");
}

?>