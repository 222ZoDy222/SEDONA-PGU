<?php 
echo "string";
if(isset($_COOKIE["isAdmin"]) == false){
	header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="Styles/AdminMenu.css">
</head>
<body>


	<div class="Container">
		

	<div class="LeftSide">
		<h1>Добавить гостиницу</h1>
		<form action="../Action_Scripts/CreateHostel.php" method="post">
		  <label>Имя гостиницы:</label>
		  <input type="text" id="name" name="name"><br><br>
		  <label>Цена:</label>
		  <input type="text" id="price" name="price"><br><br>
		  <label>Рейтинг:</label>
		  <input type="text" id="raiting" name="raiting"><br><br>
		  <input type="submit" value="Submit">
		</form>

	</div>
	

	<div class="RightSide">
		<?php 
		include("AdminMenuInclude/AdminMenuIncludeHotels.php");
		 ?>
		
	</div>

	</div>
	
	



</body>
</html>