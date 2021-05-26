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
if (isset($_GET['id_ent']) && is_numeric($_GET['id_ent']))
{
// get the 'id' variable from the URL
$id_ent = $_GET['id_ent'];

// delete record from database
if ($stmt = $mysqli->prepare("DELETE FROM entreprise WHERE id_ent = ? LIMIT 1"))
{
$stmt->bind_param("i",$id_ent);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$mysqli->close();

// redirect user after delete is successful
header("Location: index3.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: index3.php");
}

?>