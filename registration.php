<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles/registrationStyles.css">
</head>
<body>
	

	<header>
		
		<div class="AntonPidor">
			<h1>Регистрация</h1>
		</div>
		

	</header>

	<div class="centerReg">
		<form class="screen-1" action="Backend/reg.php" method="POST">
		    
		    <div class="email">
		    	<label for="email">Email Address</label>
		    		<div class="sec-2">
		      			<ion-icon name="mail-outline"></ion-icon>
		      			<input type="email" name="email" placeholder="Username@gmail.com"/>
		    		</div>
		  		</div>
		  <div class="password">
		    <label for="password">Password</label>
		    	<div class="sec-2">
		      		<ion-icon name="lock-closed-outline"></ion-icon>
		      		<input class="pas" type="password" name="password" placeholder="············"/>
		      		<ion-icon class="show-hide" name="eye-outline"></ion-icon>
		    	</div>
		  </div>
		  <button class="login">Signup</button>
		  <div class="footer"><span
		  	><a href="login.php">Login</a></span><span>Forgot Password?</span></div>
</div>
		</form>
	</div>


</body>
</html>


