<?php
	require_once 'config.php';

	$sql = "INSERT INTO `passwords` (`user_id`, `program_name`, `password`) VALUES(".$_POST['id'].",'".$_POST['prname']."','".$_POST['password']."')";
		$result = mysqli_query($link, $sql);

		if ($result) {
			echo 'added';
		} else {
			echo $sql;
		}

?>