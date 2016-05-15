<?php
require_once './class/class.php';
$pass="123456";

	$dir='./data_content';
	$file=array();
	$file=scandir($dir); // сканируем директорию в массив.
	$file = array_slice ($file, 2); // убираем . .. это не файлы!
	if (!empty($file)){
			$next_file=max($file); // максимальное значение елемента массива (след. файл.).
			$next_file = substr($next_file,0,-4); // минус 4 символа 
			$next_file=$next_file+1;
				}
	else {$next_file='1';}

if (!empty($_GET['title']))
	{	if (file_exists($dir . '/' .$_GET['title'].'.txt'))
		{
			unset($file);
			$file[0]=$_GET['title'].'.txt';
		}
		else {unset ($_GET['page']);}
	}

foreach ($file as $key) {
	$data = file_get_contents($dir.'/'.$key);
	$data= substr($key,0,-4).':=:'.$data;  // отрезаем расширение файла, и склеиваем имя файла с массивом.
	$data=preg_replace("/(\r\n){2,}/", "<br/><br/>", $data); // добавляем бряк!
	$text[] = explode(":=:", $data); // парсим файл в массив по разделителю.

}

$news=array();
foreach ($text as $key => $value) {
	$news[] = new Post ($value[0], $value[1], $value[2],$value[3]);

}

if (isset($_POST['action']))
{	$content=$_POST['title'].':=:'.$_POST['author'].':=:'.$_POST['content'];
	file_put_contents($dir.'/'.$next_file.'.txt', $content);
}
