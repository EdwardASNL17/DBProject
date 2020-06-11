<?php
	  session_start();
	  require_once 'connection.php';
    	$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

		$query="SELECT * from blogs";
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		$count=mysqli_num_rows($result);
		for ($i=0; $i <$count ; $i++) { 
			$row = mysqli_fetch_row($result);
       	  for($j=0;$j<5;$j++)
       	  {
       	  	if ($j==1) {
       	  		$author_name[$i]=$row[$j];
       	  	}
       	  	if ($j==2) {
       	  		$blog_topic[$i]=$row[$j];
       	  	}
       	  	if ($j==3) {
       	  		$blog_text[$i]=$row[$j];
       	  		
       	  	}
       	  	if ($j == 4)
       	  	{
       	  		$blog_image[$i]=$row[$j];
       	  	}
       	  	
       	  }
		}

		mysqli_close($link);
    	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Микроблоги</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

 	<div class="header">
 		<a href="/index.php">Главная</a>
 		<a href="/microblogs.php">Микроблоги</a>
 		<a href="/results.php">Результаты</a>
 		<a href="/feedback.php">Связаться</a>
 		<?php if (!isset($_SESSION['login'])) { ?><a href="/signin.php">Войти</a><?php } ?>
 		<?php if (isset($_SESSION['login'])) { ?><a href="/signin.php">Личный кабинет</a><?php } ?>
	</div>

<div class="shpk-test shpk-blue">
		<div class="text-content">
			<h1 >Микроблоги</h1>
			<h3></h3>
		</div>
		<div class="shpk-container">
				<div class="test-box" >
					<img src="https://image.flaticon.com/icons/svg/2540/2540832.svg">
					
				</div>
				<div class="test-box" >
					<img src="https://image.flaticon.com/icons/svg/2944/2944381.svg">
					
				</div>
				<div class="test-box" >
					<img src="https://image.flaticon.com/icons/svg/902/902706.svg">
					
				</div>
			</div>
	</div>	
<div class="blogs">
	<a href="#top" class="upboard"></a>
	<div class="blogs-container">
		<?php for($i=$count-1;$i>=0;$i--) {
			if ($blog_image[$i] != "" && strlen($blog_text[$i]) > 500 ) { ?>
				<div class="blog-with-image-top">
				<img src="<?php echo $blog_image[$i] ?>">
				<div class="text-content">
					<h3><?php echo $blog_topic[$i];  ?></h3>
					<br>
					<p><?php echo $blog_text[$i]; ?></p>
					<p><i><?php echo $author_name[$i]; ?></i></p>
				</div>
				</div>
			<?php } else if ($blog_image[$i] != "" ) { ?>
				<div class="blog-with-image">
				<img src="<?php echo $blog_image[$i] ?>">
				<div class="text-content">
					<h3><?php echo $blog_topic[$i];  ?></h3>
					<br>
					<p><?php echo $blog_text[$i]; ?></p>
					<p><i><?php echo $author_name[$i]; ?></i></p>
				</div>
			</div>
			<?php }
			else if (strlen($blog_text[$i]) > 200){
			?>
			<div class = "blogTemplate">
			<h1><?php echo $blog_topic[$i];  ?></h1>
			<br>
			<p><?php echo $blog_text[$i]; ?></p>
			<p><i><?php echo $author_name[$i]; ?></i></p>
			</div>
		<?php } } ?>
	</div>
	<div class="aside">
	<?php for($i=$count-1;$i>=0;$i--) {
			if ($blog_image[$i] == "" && strlen($blog_text[$i]) <= 200 ) { ?>
	<div class="aside-news">
		<p><?php echo $blog_text[$i]; ?></p>
		<p><i><?php echo $author_name[$i]; ?></i></p>
	</div>
	<?php } } ?>
	</div>
</div>
<div class="footer">
	<h3>©2019-2020 EDUARD TYAN</h3>
	
	<div class="social-networks">
		<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg"><img src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/vk-256.png"></a>
		<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-512.png"></a>
		<a href="https://sun1-84.userapi.com/c205124/v205124810/ecfc/KILdVU9gQng.jpg"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-256.png"></a>	
		<a href="https://sun9-36.userapi.com/c857416/v857416091/10eec0/jbP01fnOD_I.jpg"><img src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Instagram-256.png"></a>
	</div>
</body>
</html>