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

if (isset($_POST["reset-password-submit"])) {

	$selector = $_POST["selector"];
	$validator = $_POST["validator"];
	$password = $_POST["pwd"];
	$passwordRepeat= $_POST["pwd-repeat"];	

	if (empty($password) || empty($passwordRepeat)) {
		header("Location : create-new-password.php?newpwd=empty");
		exit();
	}else if ($password != $passwordRepeat) {
		header("Location : create-new-password.php?newpwd=pwdnotsame");
		exit();
	}

	$currentDate = date("U");

	$sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Il y'avait une erreur!";
		exit();
	}else{
		mysqli_stmt_bind_param($stmt, "s", $selector);
		mysql_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		if (!$row = mysqli_fetch_assoc($result)) {
			echo "Vous avez besoin d'une nouvelle requête.";
			exit();
		}else {

			$tokenBin = hex2bin($validator);
			$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

			if ($tokenCheck === false) {
				echo "Vous avez besoin d'une nouvelle requête.";
				exit();
			}elseif ($tokenCheck === true) {
				
				$tokenEmail = $row["pwdResetEmail"];

				$sql = "SELECT * FROM users WHERE email=?;";

				$stmt = mysqli_stmt_init($conn);

				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo "Il y'avait une erreur!";
					exit();
				}else{
					mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
					mysql_stmt_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);
					if (!$row = mysqli_fetch_assoc($result)) {
						echo "Il y'avait une erreur!";
						exit();
					}else {
					$sql = "UPDATE users SET password=? WHERE email=? ";
					$stmt = mysqli_stmt_init($conn);

					if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo "Il y'avait une erreur!";
						exit();
					}else{
						$newPwdHash = password_hash($password, PASSWORD_DEFAULT);
						mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
						mysql_stmt_execute($stmt);	

						$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
						$stmt = mysqli_stmt_init($conn);

						if (!mysqli_stmt_prepare($stmt, $sql)) {
							echo "Il y'avait une erreur!";
							exit();
						}else{
							mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
							mysql_stmt_execute($stmt);
							header("Location : index.php?newpwd=passwordupdated");
						}
					}
				}
			}

		}
	}
}


}else{
	header("Location : index.php");
}
?>