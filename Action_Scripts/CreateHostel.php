<?php 


include '../Backend/DataBaseConnection.php';

if (isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["raiting"])) {
  
	$name = $link->real_escape_string($_POST["name"]);
	$price = $link->real_escape_string($_POST["price"]);
	$raiting = $link->real_escape_string($_POST["raiting"]);

	//$sql = "INSERT INTO hotels (name, price, raiting) VALUES ('$name', '$price', '$raiting')";
	
	$stmt = $link->prepare('INSERT INTO hotels (name, price, raiting) VALUES (?, ?, ?)');
	$stmt->bind_param('sss',$name,$price,$raiting);
	$result = $stmt->execute();

	if($result){
	    echo "Данные успешно добавлены";
		header("Location: ../Backend/AdminMenu.php");


	} else{
	    echo "Ошибка: " . $link->error;
	}

	
} 




 ?>