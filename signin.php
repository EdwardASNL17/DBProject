<?php
	  session_start();
	  require_once 'connection.php';
	  if(isset($_POST["login"]) && isset($_POST["password"]))
	 	{
    		 $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

        	$login=htmlentities(mysqli_real_escape_string($link, $_POST['login']));
			$hash_pass=md5($_POST['password']);
			$password=htmlentities(mysqli_real_escape_string($link, $hash_pass));
			$query="SELECT * from users WHERE login='$login' and password='$password'";
			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
			$count=mysqli_num_rows($result);
			if ($count==1) {
				$_SESSION['login']=$login;
				$_SESSION['password']=$password;
				
				$row = mysqli_fetch_row($result);
				$avatar = $row[4];
				$id = $row[0];
				$_SESSION['id'] = $row[0];
				$_SESSION['avatar'] = $avatar;
				$_SESSION['email'] = $row[1];
				
			}
			else {
				echo "ERROR";
			}

			

			mysqli_close($link);
    	}
    	if (isset($_POST) && isset($_POST['topic']) && isset($_POST['textblog'])) 
	{	
		
		$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
		$log=htmlentities(mysqli_real_escape_string($link,$_SESSION['login']));
		$topic=htmlentities(mysqli_real_escape_string($link,$_POST['topic']));
		$textblog=htmlentities(mysqli_real_escape_string($link,$_POST['textblog']));
		if (isset($_FILES['photo']) && strlen($_FILES['photo']['name']) > 1) {
			$name = $_FILES['photo']['name'];
			$tmp_name = $_FILES['photo']['tmp_name'];
			move_uploaded_file($tmp_name,"uploads/".$name);
			$photo = "uploads/".$name;
			$photo=htmlentities(mysqli_real_escape_string($link,$photo));
		}
		else
		{
			$photo=htmlentities(mysqli_real_escape_string($link,""));
		}
		
		if ($_SESSION['login'] == "EdwardASNL17") {
			$query="INSERT INTO blogs VALUES(NULL,'$log','$topic','$textblog','$photo')";
			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
			mysqli_close($link);
		}
		else
		{
			$query="INSERT INTO predlojka VALUES(NULL,'$log','$topic','$textblog','$photo')";
			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
			mysqli_close($link);
		}

			
		
	}
	if ($result) {
			$sms="Ваша заявка успешно отправлена";
		}
		else
		{
			$fsms="Это ERROR";
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php if (isset($_SESSION['login'])) {
		# code...
	 echo "Личный кабинет";} else echo "Авторизация"; ?></title>
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
	<?php if(isset($_SESSION['login'])) { ?>
	<div class="log pink">
	<?php } else {  ?>
	<div class="log">
	<?php } ?>
		<div class="log-content">
			<?php if(isset($_SESSION['login'])) { ?><h1>Добро пожаловать</h1><?php }  ?>
			<?php if(!isset($_SESSION['login'])) { ?><h1>Войти</h1><?php }  ?>
			<?php if(!isset($_SESSION['login'])) { ?><h2>или <a href="/signup.php">зарегистрироваться</a></h2><?php }  ?>
			<?php if(isset($_SESSION['login'])) { ?><h2><?php echo $_SESSION['login'];?></h2><?php }  ?>
			<?php if(isset($_SESSION['login']) ) { ?><h2 class="logout"><a href="admin.php">Внести изменения</a></h2><?php }  ?>
			<?php if(isset($_SESSION['login'])) { ?><h2 class="logout"><a href="logout.php">Выйти</a></h2><?php }  ?>

			
		</div>
		<?php if(isset($_SESSION['login'])) { ?>
		<div class="avatar">
			<img src="<?php echo($_SESSION['avatar']) ?>">
		</div>

		<?php }  ?>

	</div>
<?php if(isset($_SESSION['login'])) { ?>
	<div class="form blog">
	<div>
		<h1>Микроблог</h1>
		<p>Расскажите, о чем хотите</p>
	</div>
	<form class="opinion" method="POST" name="addblog" enctype="multipart/form-data">
		<div class="group">
		<label>Тема сообщения:</label>
		<input type="text" placeholder="Тема сообщения" id="topic" name="topic">
		</div>
		<div class="group">
		<textarea name="textblog" id="textblog" placeholder="Введите текст блога" required="1"></textarea>
		</div>
	
		<input type="file" placeholder="Введите ссылку" id="photo" name="photo" class="inputfile" multiple>
		<label for="photo" class="dbtn"><span>Прикрепить фото</span></label>
	
		<input type="submit" name="done" id="done" value="Отправить" hidden>
		<label for="done" class="dbtn">Отправить</label>
		<?php  if ($sms && isset($_POST['textblog'])) {?><div class="allert"><?php echo $sms;?></div><?php } ?>
		<?php  if ($fsms && isset($_POST['textblog'])) {?><div class="allert fail"><?php echo $fsms;?></div><?php }?>
		</form>

</div>
<?php }  ?>
	<?php if(!isset($_SESSION['login'])) { ?><div class="logbox">
		<form class="log-form" method="POST" name="signin">
			<label>Введите логин:</label>
			<input type="text"  id="login" name="login">
			<label>Введите пароль:</label>
			<input type="password"  id="password" name="password">
			<input type="submit" name="done" id="done" value="Войти">
		</form>
	</div><?php } ?>
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
<script type="text/javascript" src="function.js"></script>