
<?php 
include_once 'libs/simple_html_dom.php';
require_once 'connection.php';
//Сайт для парсинга
$url = "https://ria.ru";

//Массив для данных
$lists = array();

//Получаем сайт с помощью curl в переменную
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url); // Устанавливаем ссылку
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // передаем результат в качестве строки
$answer = curl_exec($ch); // Заносим результат в переменную


//echo $answer;

//Создаем объект библиотеки для парсинга
$dom = new simple_html_dom();
$html = str_get_html($answer); //Формируем массив
$list = $html->find(".cell-list__list a"); //Ассоциативный массив из элементов имеющих класс .about-list li
$links = array();
$i = 0;
foreach ($list as $key => $value)
{
    $links[$i] = $value->href;
    $i++;
}
$headers = array();
$sources = array();
$articles = array();
$images = array();
for ($i=0; $i <= 3 ; $i++) 
{ 
	
	$url= "$links[$i]";
	//Массив для данных

	//Получаем сайт с помощью curl в переменную
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url); // Устанавливаем ссылку
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // передаем результат в качестве строки
	$answer = curl_exec($ch); // Заносим результат в переменную


	//echo $answer;

	//Создаем объект библиотеки для парсинга
	$html = str_get_html($answer); //Формируем массив
	$header = $html->find(".article__title");
	$article = $html->find(".article__text");
	$image = $html->find(".photoview__open img");
	$images[$i] = $image[0]->src;
	$full_art = "";

	foreach ($header as $key => $value) {
		$headers[$i] = $value->plaintext;
		

	}
	foreach ($article as $key => $value) {
		$full_art.= $value->plaintext."<br><br>";
		
	}
	$articles[$i] = $full_art;
	
}
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
for ($i=0; $i < count($headers)-1 ; $i++) { 
	$query="INSERT INTO blogs VALUES(NULL,'EdwardASNL17','$headers[$i]','$articles[$i]','$images[$i]')";
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
}
mysqli_close($link);


/*foreach ($list as $key => $value) // Проходим все элементы в list
{ 
    //Спарсим название и описание в массив.
    $lists[$value->children(1)->plaintext] = $value->children(2)->plaintext; //Заносим в ассоциативный массив название - описание

}

//Выводим массив

foreach ($lists as $key => $value) 
{


    echo "NAME : " . $key . " DESCRIPTIONS: " . $value . "<br/>";

}
*/



// echo "<pre>";
// print_r($html);
// echo "</pre>";




?>