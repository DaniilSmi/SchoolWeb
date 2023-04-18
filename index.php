<?php
	// добавляем конфигурационный файл
	require_once 'config.php';

	// делаем запрос к базе данных из post запроса
	$sql = 'SELECT * FROM `passwords` WHERE `user_id` = '.$_GET["id"].' ORDER BY `id`';
  $result = mysqli_query($link, $sql);
  $myArray = array();

  // проверяем на ошибки
  if ($result != false) {
  	//выводим в формате JSON
	 while($row = $result->fetch_assoc()) {
    $myArray[] = $row;
	}	

 		// проверяем присутствуют-ли запрашиваемые данные
	  if (empty($myArray)) {
	  	print('error');
	  } else {
	  	print(json_encode($myArray));
	  }
	} else {
		// выводим ошибку
		print('error');
	}
?>