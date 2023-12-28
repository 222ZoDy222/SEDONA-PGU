<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "sedona";

$link = mysqli_connect($hostname, $username, $password, $databaseName);


if ($link == false){
	// Ошибка: Невозможно подключиться к MySQL 
    echo("DATABASE ERROR");
    //exit;
}

//Соединение установлено успешно
 




 ?>