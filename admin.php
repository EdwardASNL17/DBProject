<?php
  session_start();
  require_once 'connection.php';
  if (isset($_POST['del_user']) or isset($_POST['add_q']) or isset($_POST['ava_change']) or isset($_FILES['ava_change']))  {
  	$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
  	if (isset($_POST['add_q']) && $_POST['add_q']!='') {
  		$add_q=htmlentities(mysqli_real_escape_string($link,$_POST['add_q']));
  		$query="INSERT INTO questions VALUES(NULL,'1','$add_q')";
  	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

  	}
  	if(isset($_POST['del_user']) && $_POST['del_user']!=''){
 
	$link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $del_user = mysqli_real_escape_string($link, $_POST['del_user']);
     
    $query ="DELETE FROM users WHERE login = '$del_user'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
 	}
 	if(isset($_FILES['ava_change'])){
 	$name = $_FILES['ava_change']['name'];
	$tmp_name = $_FILES['ava_change']['tmp_name'];
	move_uploaded_file($tmp_name,"uploads/".$name);
	$photo = "uploads/".$name;
 
	$link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $ava_change = mysqli_real_escape_string($link, $photo);
    $login = $_SESSION['login'];
     
    $query ="UPDATE users SET avatar='$ava_change' WHERE login='$login'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

 	}
  	
  	
  }
   if ($_SESSION['login'] == "EdwardASNL17") {
  	$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
    $query= "SELECT * from predlojka";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $rows=mysqli_num_rows($result);
    $logins = array();
    $titles = array();
    $blogtexts = array();
    $images = array();
    for ($i=0; $i < $rows ; $i++) { 
    	$row = mysqli_fetch_row($result);
    	$predlID[$i]=$row[0];
    	$logins[$i] = $row[1];
    	$titles[$i] = $row[2];
    	$blogtexts[$i] = $row[3];
    	$images[$i] = $row[4];
    }
    for ($i=0; $i < $rows ; $i++) { 
    	if (isset($_POST["predl$i"])) 
       	  		{
       	  		   if ($_POST["predl$i"] == "Одобрить") {
       	  		   	 $query="INSERT INTO blogs VALUES(NULL,'$logins[$i]','$titles[$i]','$blogtexts[$i]','$images[$i]')";
       	  		   	 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
       	  		   	 $query = "DELETE from predlojka WHERE id = $predlID[$i]";
       	  		   	 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
       	  		   }
       	  		   else if ($_POST["predl$i"] == "Отклонить") {
       	  		   	 $query = "DELETE from predlojka WHERE id = $predlID[$i]";
       	  		   	 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
       	  		   }
       	  		}
    }
    mysqli_close($link);
 	}
 	 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Панель администратора</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 	<div class="header">
 		<a href="/index.php">Главная</a>
 		<a href="/microblogs.php">Микроблоги</a>
 		<a href="">Результаты</a>
 		<a href="/feedback.php">Связаться</a>
 		<?php if(isset($_SESSION['login'])) { ?><a href="/signin.php">Личный кабинет</a><?php } else { ?> <a href="/signin.php">Войти</a><?php }  ?>
	</div>
	<div class="admin">
	<div >
		<h1>Выберите действие</h1>
		
		<form class="opinion adm" method="POST" name="feedback" enctype="multipart/form-data">
		<?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'EdwardASNL17') { ?>	
		<div class="group">
			<label>Удалить пользователя:</label>
			<input type="text" placeholder="Имя" id="del_user" name="del_user">
		</div>
		<div class="group">
		<label>Добавить вопрос:</label>
		<input type="text" placeholder="вопрос" id="add_q" name="add_q">
		</div>
		<?php }  ?>
		
			
			<input type="file" placeholder="Вставьте ссылку" id="ava_change" name="ava_change" hidden>
			<label for="ava_change" class="dbtn">Прикрепить фото</label>
		<div class="group">
		<input type="submit" name="done" id="done" value="Отправить">
		</div>
		</form>
	</div>
	</div>
	<?php if ($_SESSION['login'] == "EdwardASNL17") { ?>
	<div class="form blog">
	<div>
		<h1>Предложка</h1>
		<p>Теперь вы контролируете контент</p>
	</div>
	<?php if ($rows>0) { ?>
	<form class="predl" method="POST" name="predlojka">
		<?php for ($i=0; $i <$rows ; $i++) 
		{ ?>	<div class="predl-blog">
					<div class="predl-text">
					<h3><?php echo $titles[$i]; ?></h3>
					<p><?php echo $blogtexts[$i]; ?></p>
					</div>
			<?php if ($images[$i] !== "")
			{?>
				<img src="<?php echo $images[$i];?>">
			<?php }?>
				</div>
				<div class="predl-var">
							<div class="btn-yes">
								<input  type="radio" value="Одобрить" name="predl<?php echo $i ?>" id="yes-answer<?php echo $i ?>">
            					<label for="yes-answer<?php echo $i ?>">Одобрить</label>
            				</div>
							<div class="btn-no">
								<input type="radio" value="Отклонить" name="predl<?php echo $i ?>" id="no-answer<?php echo $i ?>">
            					<label for="no-answer<?php echo $i ?>">Отклонить</label>
            				</div>
						</div>

		<?php }?>
		<input class="button m-top" type="submit" name="predldone" id="predl" value="Отправить">
	</form>
	<?php } else {  ?>
	<p class="m-top">Записей нет</p>
	<?php }  ?>
</div>
<?php }  ?>
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