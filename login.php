<?php
	require_once 'config.php';

	// select user for check
		$sql = "SELECT * FROM `user` WHERE `email` = '".$_GET["email"]."' LIMIT 1";
		$result = mysqli_query($link, $sql);
		$user = array();

		while($row = $result->fetch_assoc()) {
    	$user[] = $row;
		}	
		$password = $_GET["password"];
		// if isset user - continue
		if (!empty($user)) {
			$user = $user[0];
			// check for password validity
			if (password_verify($password, $user["password"])) {
				// set new session
				echo $user["id"];
			} else {
				echo 'Passwords isn`t the same';
			}
		} else {
			echo 'User not found';
		}

?>