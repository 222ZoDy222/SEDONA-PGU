<?php 

session_start();

include("DataBaseConnection.php");

if(!isset($_POST["email"]) || !isset($_POST["password"])) {
	return;
}

$email = $_POST["email"]; 
$password = $_POST["password"]; 

if($email == "" || $password == "") {
	echo("Установите email или password");
	return;
}


//echo(isset($_POST["email"]));

if ($link){
     
	$hashedPassword = md5($password);

	
	$res = $link->query("INSERT INTO users(email,password) VALUES('$email','$hashedPassword')");	

	//echo "Успешно";

	// Выполняем запрос к базе данных
	$query = "SELECT * FROM users WHERE email='$email' AND password='$hashedPassword'";
	$result = mysqli_query($link, $query);

	// Проверяем результат запроса
	if (mysqli_num_rows($result) >= 1) {
	    // Пользователь найден
	    $user = mysqli_fetch_assoc($result);
	    // Создаем сессию
	    //session_start();
	    // Сохраняем в сессию данные пользователя
	    $_SESSION['user_id'] = $user['id'];
	    $_SESSION['email'] = $user['email'];
	    // Записываем куки	    
    	setcookie("user", $_POST['email'], time() + 3600 * 24 * 100, "/", "", 0);
	    // Перенаправляем пользователя на главную страницу
	    header("Location: ../index.php");
	    die();
	} else {
	    // Пользователь не найден
	    echo "Неверный логин или пароль";

	}
	


}
else {
    echo("3");

}





?>



