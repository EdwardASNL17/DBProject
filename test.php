<?php
		session_start();
		$questions = array();
		require_once 'connection.php';
		$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
        $query="SELECT name, comment, question_name FROM test JOIN questions ON questions.test_id=test.id WHERE questions.test_id=1";
       	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
       	$rows=mysqli_num_rows($result);
       	for($i=0;$i<$rows;$i++)
       	{	
       	  $row = mysqli_fetch_row($result);
       	  for($j=0;$j<3;$j++)
       	  {
       	  	if ($j==0) {
       	  		$test_name=$row[$j];
       	  	}
       	  	if ($j==1) {
       	  		$test_op=$row[$j];
       	  	}
       	  	if ($j==2) {
       	  		$questions[$i]=$row[$j];
       	  		$quest[$i] = $row[$j];
       	  	}
       	  	
       	  }

       	}
       	  if (isset($_POST) && isset($_SESSION['login'])) {
       	  	$mistakes = 0;
       	  	$strateg= 0;
                  $posrednick = 0;
                  $admin = 0;
                  $virtuoz = 0;
       	  	for ($j=0; $j < $rows; $j++) 
       	  	{

       	  		if (isset($_POST["answer$j"])) 
       	  		{
       	  			switch ($j) 
                              {
                                    case 0:
                                    case 1:
                                    case 3:
                                    case 4:
                                    case 8:
                                    case 10:
                                    case 12:
                                    case 15:
                                    case 19:
                                    switch ($_POST["answer$j"]) {
                                                case 'Да':
                                                  $posrednick+=2;
                                                break;
                                                case 'Мб':
                                                  $posrednick++;
                                                  
                                                break;
                                                case 'Нет':
                                                  $admin+=2; 
                                                break;
                                                
                                          }      
                                    break;
                                    case 2:
                                    case 5:
                                    case 6:
                                    case 7:
                                    case 9:
                                    case 11:
                                    case 13:
                                    case 14:
                                    case 16:
                                    case 17:
                                    case 18:
                                    switch ($_POST["answer$j"]) {
                                                case 'Да':
                                                  $strateg+=2;
                                                break;
                                                case 'Мб':
                                                  $posrednick++;
                                                  
                                                break;
                                                case 'Нет':
                                                  $virtuoz+=2; 
                                                break;
                                                
                                          }      
                                    break;
                                    
                        
                              }
       	  		}
       	  		else
       	  		{
       	  			$mistakes++;
       	  		}
       	  	}
       	  	if ($mistakes>0 && isset($_SESSION['login'])) {
       	  		$fsms="Это ERROR";
       	  	}
       	  	else
       	  	{
       	  		$sms="Ваша заявка успешно отправлена";
       	  		if ($strateg > $virtuoz && $strateg > $posrednick && $strateg > $admin) {
       	  			$type_id = 0;
       	  			
       	  		}
       	  		else if ($posrednick > $virtuoz && $posrednick > $strateg && $posrednick > $admin)
       	  		{
       	  			$type_id = 1;
       	  		}
       	  		else if ($admin > $virtuoz && $admin > $posrednick && $admin > $strateg) {
       	  			$type_id = 2;
       	  		}
       	  		else
       	  		{
       	  			$type_id = 3;
       	  		}
       	  		$id=htmlentities(mysqli_real_escape_string($link, $_SESSION['id']));
       	  		$opisanie=htmlentities(mysqli_real_escape_string($link, $opis));
       	  		$type_id =htmlentities(mysqli_real_escape_string($link, $type_id));
       	  		$sel_query = "SELECT * FROM results WHERE user_id = $id";
       	  		$sel_result = $result = mysqli_query($link, $sel_query) or die("Ошибка " . mysqli_error($link));
       	  		$sel_rows = mysqli_num_rows($sel_result);
       	  		if ($sel_rows == 0) {
       	  			$test_query="INSERT INTO results VALUES(NULL, '1','$id','',$type_id)";
       				$result = mysqli_query($link, $test_query) or die("Ошибка " . mysqli_error($link));
       	  		}
       	  		else
       	  		{
       	  			$test_query="UPDATE results SET type_id = $type_id WHERE user_id = $id";
       				$result = mysqli_query($link, $test_query) or die("Ошибка " . mysqli_error($link));
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
	<div class="shpk-test">
		<div class="text-content">
			<h1 ><?php echo $test_name;  ?></h1>
			<h3><?php echo $test_op;  ?></h3>
		</div>
		<div class="shpk-container">
				<div class="test-box" >
					<img src="https://image.flaticon.com/icons/svg/552/552439.svg">
					<p>Тест занимает менее 12 минут.</p>
				</div>
                        <div class="test-box" >
                              <img src="https://image.flaticon.com/icons/svg/3062/3062465.svg">
                              <p>Выбирайте первый пришедший в голову ответ</p>
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
	<?php if(isset($_SESSION['login'])) {  ?>
		<div class="test-quest">
			<form method="POST" name="test" class="testform">
				<?php for($i=0;$i<$rows;$i++) { ?>
					<div class="questions">
						<h3><?php echo $quest[$i];  ?></h3>
						<div class="quest-var">
							<div class="btn-yes">
								<input  type="radio" value="Да" name="answer<?php echo $i ?>" id="yes-answer<?php echo $i ?>">
            					<label for="yes-answer<?php echo $i ?>">Да</label>
            				</div>
            				<div class="btn-mb">
								<input type="radio" value="Мб" name="answer<?php echo $i ?>" id="mb-answer<?php echo $i ?>">
            					<label for="mb-answer<?php echo $i ?>">Затрудняюсь ответить</label>
            				</div>
							<div class="btn-no">
								<input type="radio" value="Нет" name="answer<?php echo $i ?>" id="no-answer<?php echo $i ?>">
            					<label for="no-answer<?php echo $i ?>">Нет</label>
            				</div>
						</div>
					</div>
		<?php  } ?>
			

				<?php if ($fsms && isset($_SESSION['login']))  
				{ 
					$ct = 0;
					for ($i=0; $i <$rows ; $i++) { 
						if (isset($_POST["answer$i"])) {
							$ct++;
						}
					}
					if ($ct>0 && $ct !== $rows-1) {
						echo $fsms;
					}
					

					}
				 
				?>
                  
                        <input class="button" type="submit" name="testdone" id="testdone" value="Отправить">
                        <?php  if ($sms && isset($_SESSION['login'])) 
                        { 

                              echo $sms;

                        }
                        ?>     
			</form>
		</div>

		
		<?php  } else { ?>
		<div class="non-auth"><h1>Вы не <a href="signin.php">авторизовались<a/></h1></div>
	<?php }  ?>
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