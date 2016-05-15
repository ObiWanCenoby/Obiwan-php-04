<?php 
if ($_GET['page']=='del' and !empty ($_GET['title']))
{ 
	unlink($dir . '/' .$_GET['title'].'.txt');
	echo $dir . '/' .$_GET['title'].'.txt <br><p>Удалено!</p>';
}

	