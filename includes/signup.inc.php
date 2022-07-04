<?php
if (isset($_POST['submit'])) {
include './connection.inc.php';
	$conn = dbcon();
	$username = $_POST['user_id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$pwd_confirm = $_POST['password_confirmation'];
	$sql = "INSERT INTO `users`(`id`,`username`,`email`,`password`) VALUES('','$username','$email','$password')";
	if ($password != $pwd_confirm) {
		header("Location: ./index.php?password_not_match");
		exit();
	}
	else if (empty($username) || empty($email) || empty($password) || empty($pwd_confirm)) {
		header("Location: ../index.php?error=emptyfields");
		exit;
	}
	else {
		if ($sqlrun = mysqli_query($conn,$sql)) {
			header("Location: ../index.php?success=true");
		}
		else {
			header("Location: ../index.php?error=cantsignup");
		}
	}
}
else {
	echo "SUBMIT NOT SET";
}

?>