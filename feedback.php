<?php
	session_start();
 	require_once 'connection.php';
	if (isset($_POST['subject']) && isset($_POST['message'])) 
	{	
		$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
		$login=htmlentities(mysqli_real_escape_string($link,$_SESSION['login']));
		$email=htmlentities(mysqli_real_escape_string($link,$_SESSION['email']));
		$subject=htmlentities(mysqli_real_escape_string($link,$_POST['subject']));
		$message=htmlentities(mysqli_real_escape_string($link,$_POST['message']));
		$query="INSERT INTO feedback VALUES(NULL,'$login','$email','$subject','$message')";
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

		mysqli_close($link);	
	}
	if ($result) {
			$sms="Ваша заявка успешно отправлена";
		}
		else
		{
			$fsms="Это ERROR";
		}
	$headers="From:$email".'\r\n';
	$headers.='Content-type:text/html charset=utf-8 ';

	mail('edwardasnl@mail.ru', $subject, $message,$headers);

	
	
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
<div class="us">
	<div class="us-content" >
		<h1>Свяжитесь с нами</h1>
		<p>Пожалуйста, не стесняйтесь, и присылайте нам ваши вопросы, комментарии или предложения, - мы читаем каждое письмо, и хотели бы услышать ваши мнения. Извините, но в данный момент мы можем отвечать только на сообщения на английском языке.</p>
		<div class="us-networks">
			<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg"><img src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/vk-256.png"></a>
			<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-512.png"></a>
			<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-256.png"></a>	
			<a href="https://sun9-36.userapi.com/c857416/v857416091/10eec0/jbP01fnOD_I.jpg"><img src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Instagram-256.png"></a>
		</div>
	</div>
	<img class="usImg animation-pic" src="https://visualpharm.com/assets/284/Last%2024%20Hours-595b40b75ba036ed117d853a.svg">
</div>
<div class="form">
	<div>
		<h1>Заполните форму</h1>
		<p>Если вы хотите оставить свой отзыв, то заполните форму, расположенную ниже</p>
	</div>
	<form class="opinion" method="POST" name="feedback">
		<div class="group">
		<label>Тема сообщения:</label>
		<input type="text" placeholder="Тема сообщения" id="subject" name="subject" required="1">
		</div>
		<div class="group">
		<textarea name="message" id="message" placeholder="Введите ваше сообщение" required="1"></textarea>
		</div>
		<div class="group">
		<input type="submit" name="done" id="done" value="Отправить">
		<?php  if ($sms && isset($_POST['subject'])) {?><div class="allert"><?php echo $sms;?></div><?php } ?>
		<?php  if ($fsms && isset($_POST['subject'])) {?><div class="allert fail"><?php echo $fsms;?></div><?php }?>
		</div>
		</form>

</div>
<div class="footer">

	<h3>©2019-2020 EDUARD TYAN</h3>
	<div class="social-networks">
		<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg"><img src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/vk-256.png"></a>
		<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-512.png"></a>
		<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-256.png"></a>	
		<a href="https://sun9-36.userapi.com/c857416/v857416091/10eec0/jbP01fnOD_I.jpg"><img src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Instagram-256.png"></a>
	</div>

</div>
</body>
</html>