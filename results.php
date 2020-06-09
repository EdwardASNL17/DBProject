<?php
	session_start();
 	require_once 'connection.php';

 	$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
    if (isset($_SESSION) && isset($_SESSION['id'])) {
    	$id = $_SESSION['id'];
    $query="SELECT * FROM types JOIN results ON types.id = results.type_id WHERE results.user_id = $id";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $rows=mysqli_num_rows($result);
    for ($i=0; $i <$rows ; $i++) { 
    	$row = mysqli_fetch_row($result);
    	if ($i == $rows -1) {
    		$psycho_type = $row[1];
    		$psycho_citata = $row[2];
    		$psycho_opis = $row[3];
    }
    
    	}
    }
   
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Связаться с нами</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <div class="header">
 	<a href="/index.php">Главная</a>
 	<a href="/microblogs.php">Микроблоги</a>
 	<a href="/results.php">Результаты</a>
 	<a href="/feedback.php">Связаться</a>
 	<?php if(isset($_SESSION['login'])) { ?><a href="/signin.php">Личный кабинет</a><?php } else { ?> <a href="/signin.php">Войти</a><?php }  ?>
</div>
<div class="us blue">
	<div class="us-content" >
		<h1>Результаты теста</h1>
		<p>Пожалуйста, не стесняйтесь, и присылайте нам ваши вопросы, комментарии или предложения, - мы читаем каждое письмо, и хотели бы услышать ваши мнения. Извините, но в данный момент мы можем отвечать только на сообщения на английском языке.</p>
	</div>
	<img class="usImg" src="https://image.flaticon.com/icons/svg/2958/2958889.svg">
</div>
<div class="us peach">
	<div class="us-content" >
		<?php if (!isset($_SESSION['login'])) { ?>
			<h1>Вы не авторизовались</h1>
		<?php } 
		 else if ($rows == 0) { ?>
		 	<h1>Вы не проходили тест</h1>
		 <?php }
		 else {

		  ?>
		<h1>Личность <?php echo "$psycho_type";  ?></h1>
		<p class="citata"><i><?php echo "$psycho_citata";  ?></i></p>
		<br>
		<p><?php echo "$psycho_opis";  ?></p>
	<?php }  ?>
	</div>
	
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

</div>
</body>
</html>