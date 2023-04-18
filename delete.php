<?php
	require_once 'config.php';

	// select user for check
		$sql = "DELETE FROM `passwords` WHERE `id` =".$_GET['id']." AND `user_id` = ".$_GET['userid'];
		$result = mysqli_query($link, $sql);

		if ($result) {
			echo 'deleted';
		} else {
			echo 'error';
		}
?>