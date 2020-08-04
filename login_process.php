<?php

if (isset($_POST['login-submit'])){

	require 'db_process.php';

	$email = $_POST['email'];
	$password = $_POST['pwd'];

	if (empty($email) || empty($password)){
		header("Location: ../signup.php?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE usersemail=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?sqlerror");
		    exit();
		}

		else {
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['userspwd']);
				if ($pwdCheck == false) {
					header("Location: ./login.php?error=wrong_password&email=".$email);
		            exit();
		        }
		        else if ($pwdCheck == true) {
					session_start();
					$_SESSION['username'] = $row['username'];
					$_SESSION['userid'] = $row['userid'];
					header("Location: ./index.php?login=success");
		            exit();
				}

				else{
                   header("Location: ./login.php?error=wrong_password&email=".$email);
		            exit();
				}
		    }else{
		    	header("Location: ./login.php?error=nouser");
		            exit();
		    }
		}
	}
}