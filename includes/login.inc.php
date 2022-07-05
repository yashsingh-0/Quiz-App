<?php
if (isset($_POST['login'])) {
	include "./connection.inc.php";
	$conn = dbcon();
	$username = $_POST['user_id'];
	$password = $_POST['password'];
	$sql="SELECT `username` FROM `users` WHERE `username` = '$username'";
	$sqlr = mysqli_query($conn, $sql);
	$array = mysqli_fetch_assoc($sqlr);
	if (empty($username) || empty($password)) {
		header("Location: ../login.php?error=emptyfields");
		exit();
	}
	else if ($array <= 0 ) {
		header("Location: ../login.php?user_does_not_exist");
		exit();
	}
	else {
		$passcheck = "SELECT * FROM `users` WHERE `username`= '$username' AND `password` = '$password'";
		$sqlra = mysqli_query($conn,$passcheck);
		$array_pass = mysqli_fetch_assoc($sqlra);
		if($array_pass <= 0) {
			header("Location: ../login.php?error=wrongpassword");
			exit();
		}
		else {
			session_start();
			$_SESSION['username']= $username;
			header("Location: ../profile.php?username=".$_SESSION['username']);
			exit();
		}
	}

}
else {
	header("Location: ../login.php?error=submit_not_clicked");
	exit;
}


?>