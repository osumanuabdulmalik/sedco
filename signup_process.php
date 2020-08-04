<?php
if (isset($_POST['signup-submit'])) {

	require 'db_process.php';


	$username = $_POST['uid'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];

	if (empty($username) || empty($email) || empty($password)){
		header("Location: ./login.php?error=invalid&uid=".$username."&email=".email);
		exit();
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ./login.php?error=invalidmail&uid=".$username);
	}

else {
	$sql = "SELECT username from users WHERE username=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
	header("Location: ./login.php?error=sqlerror");
	exit();
	}
	else{
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		if ($resultCheck > 0) {
			header("Location: ./login.php?error=usertaken&mail=".$email);
	     exit();
		}
		else {

			$sql = "INSERT INTO users (username, usersemail, userspwd) VALUES (?, ?, ?)";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ./login.php?error=sqlerror");
	        exit();
		}
		else {
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

			mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
			mysqli_stmt_execute($stmt);
			header("Location: ./login.php?signup=success");
	        exit();
		}


	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
}
}

else {
	header("Location: ./login.php");
	exit();
}