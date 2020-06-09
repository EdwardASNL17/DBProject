<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
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

 <div class="content">
 	<img src="https://image.flaticon.com/icons/svg/552/552415.svg">
 	<div class="text-info">
 		<h1>Наши читатели утверждают, что наш тест настолько точен, “что это немного жутковато”.</h1>
 		<p>Получите точное, подробное описание того, кем вы являетесь, и почему вы поступаете так, а не иначе.</p>
 		<div class="btn">
 		<a href=/test.php>Пройти тест</a>
 		</div>
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