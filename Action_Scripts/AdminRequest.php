<?php 

define("ADMIN_LOGIN", "admin");
define("ADMIN_PASSWORD", "qwerty");


if (isset($_POST["login"]) && isset($_POST["pass"])) {
  

	$Login = $_POST["login"];
	$Pass = $_POST["pass"];


	if($Login == ADMIN_LOGIN && $Pass == ADMIN_PASSWORD){

		//$_COOKIE["isAdmin"] = true;
		setcookie('isAdmin', true, time() + 60 * 60 * 10,"/");
		header("Location: ../Backend/AdminMenu.php");
	}

} 

?>




