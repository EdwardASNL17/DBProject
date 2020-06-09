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
	<title>Тест</title>
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
<a name="top"></a>
<div class="shpk-test shpk-blue">
		<div class="text-content">
			<h1 >Микроблог</h1>
			<h3></h3>
		</div>
		<div class="shpk-container">
				<div class="test-box" >
					<img src="https://images.genius.com/481d3fe358aff3762168c7573ecf89f6.1000x1000x1.jpg">
					<p>Бесплатный концерт лил кристины.</p>
				</div>
				<div class="test-box" >
					<img src="https://image.flaticon.com/icons/svg/552/552439.svg">
					<p>Тест занимает менее 12 минут.</p>
				</div>
				<div class="test-box" >
					<img src="https://image.flaticon.com/icons/svg/552/552404.svg">
					<p>Отвечайте честно (даже если вам не нравится ответ).</p>
				</div>
				<div class="test-box" >
					<img src="https://image.flaticon.com/icons/svg/552/552411.svg">
					<p>Постарайтесь не давать “нейтральных” ответов.</p>
				</div>
			</div>
	</div>	
<div class="blogs">
	<a href="#top" class="upboard"></a>
	<div class="blogs-container">
		<?php for($i=$count-1;$i>=0;$i--) {
			if ($blog_image[$i] != "" && strlen($blog_text[$i]) > 1500 ) { ?>
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