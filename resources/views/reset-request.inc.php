<?php

$dBServername = "localhost";
$dBUsername = "iahsconnect";
$dBPassword = "iahsconnect@727";
$dBName = "iahs";

//Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

//Check connection
if (!$conn) {
	die("Connection failed:" . mysqli_connect_error());
}

if (isset($_POST["reset-request-submit"])) {

	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);

	$url = "https://www.groupeconnectiebs.com/adiahs.groupeconnectiebs.com/iahsconnect/create-new-password.php?selector=" .$selector. "&validator=" .bin2hex($token);
	
	$expires = date("U") + 1800;

	$userEmail = $_POST["email"];

	$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Il y'avait une erreur!";
		exit();
	}else{
		mysqli_stmt_bind_param($stmt, "s", $userEmail);
		mysqli_stmt_execute($stmt);
	}

	$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Il y'avait une erreur!";
		exit();
	}else{
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
		mysqli_stmt_execute($stmt);
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);

	$to = $userEmail;

	$subject = 'Récupérer un mot de passe pour IAHS';

	$message = '<p>Nous avons reçu une requête de récupération de mot de passe. le lien de récupération du mot de passe est en dessous. Si vous ne le voulez pas, vous pouvez ignorer ce mail.</p>';

	$message .= '<p>Vous avez ici le lien de récupération: </br>';

	$message .= '<a href=" '.$url.' ">'.$url.'</a></p>';

	$headers = "From : IAHS <judicaelamani@gmail.com>\r\n";

	$headers .= "Reply to : judicaelamani@gmail.com\r\n";

	$headers .= "Content-type : text/html\r\n";

	mail($to, $subject, $message, $headers);

	header("Location: reset-password.php?reset=success");

}else{
	header("Location : index.php");
}

?>