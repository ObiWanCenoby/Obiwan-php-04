<?php
if (!empty($_GET['page']) and file_exists('./parts/'.$_GET['page'].'.php')){
	$page=$_GET['page'];
		foreach ($news as $key){
			require_once './parts/'.$page.'.php';
		}
	}
else{
	foreach ($news as $key){
		include './parts/all_news.php';		
	}
}