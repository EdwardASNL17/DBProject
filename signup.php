<?php
	  
	  require_once 'connection.php';
	  if(isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["re-password"]) && isset($_POST["email"])&& ($_POST["password"]==$_POST["re-password"]))
	 	{
	 		 $avatars = array('https://image.flaticon.com/icons/svg/145/145843.svg','https://image.flaticon.com/icons/svg/145/145848.svg','https://image.flaticon.com/icons/svg/145/145842.svg','https://image.flaticon.com/icons/svg/145/145846.svg','https://image.flaticon.com/icons/svg/145/145845.svg');
	 		 $avatarID = mt_rand(0,count($avatars)-1);
	 		 $avatar = $avatars[$avatarID];
	 		 

    		 $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
        	$login=htmlentities(mysqli_real_escape_string($link, $_POST['login']));
				
			$email=htmlentities(mysqli_real_escape_string($link, $_POST['email']));
			$hash_pass=md5($_POST['password']);
			$password=htmlentities(mysqli_real_escape_string($link, $hash_pass));
			$query="INSERT INTO users VALUES(NULL, '$email','$login','$password','$avatar')";
			$result = mysqli_query($link, $query);
			if ($result == false ) {
				echo "ERROR";
			}
			else
			{
			mysqli_close($link);
			header('Location:signin.php');
			exit();
			}
    	}
    	 

    	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <div class="header">
 	<a href="/index.php">Главная</a>
 	<a href="/microblogs.php">Микроблоги</a>
 	<a href="/results.php">Результаты</a>
 	<a href="/feedback.php">Связаться</a>
 	<a href="/signin.php">Войти</a>
 	
 </div>
 <div class="us">
	<div >
		<h1>Регистрация</h1>
		<p>Для того, чтобы пройти тест, вам необходимо зарегистрироваться по форме ниже</p>
	</div>
</div>
<div class="registration form">

	<form class="opinion reg" method="POST" name="signup">

		<div class="group">
			<label>Введите логин:</label>
			<input type="text" placeholder="Логин" id="login" name="login">
		</div>
		<div class="group">
		<label>Введите Email:</label>
		<input type="email" placeholder="Email" id="email" name="email">
		</div>
		<div class="group">
		<label>Введите пароль:</label>
		<input type="password" placeholder="Пароль" id="password" name="password">
		</div>
		<div class="group">
		<label>Повторите пароль:</label>
		<input type="password" placeholder="Пароль" id="re-password" name="re-password">
		</div>
		<div class="group">
		<input type="submit" name="done" id="done" value="Зарегистрироваться">
		</div>
		</form>
</div>
<div class="footer">
	<h3>©2011-2019 NERIS Analytics Limited</h3>
	<p>Disclaimer: All non-English versions of the website contain unofficial translations contributed by our users. They are not binding in any way, are not guaranteed to be accurate, and have no legal effect. The official text is the English version of the website. Please consider reporting inaccuracies to support@16personalities.com or join our translation project!</p>
	<div class="social-networks">
		<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg"><img src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/vk-256.png"></a>
		<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-512.png"></a>
		<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-256.png"></a>	
		<a href="https://sun9-36.userapi.com/c857416/v857416091/10eec0/jbP01fnOD_I.jpg"><img src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Instagram-256.png"></a>
	</div>
</body>
</html>