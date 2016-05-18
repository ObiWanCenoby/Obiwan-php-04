<?php
if(isset($_GET['id']) and isset($_GET['page']) and (!bad_id($_GET['id']))){
	$id="WHERE id=".$_GET['id']."";
		if (bad_id($_GET['id'])){
			echo bad_id($_GET['id']);
		}
	}
	else {
		$id=' ';
	}
	$dbh =db_connect ();
    $sql= "SELECT id, title, text, author FROM posts $id";
   	$result = $dbh -> query($sql);
	$result -> setFetchMode (PDO::FETCH_INTO, new Post());

if (!empty($_GET['page']) and file_exists('./parts/'.$_GET['page'].'.php')){
	$page=$_GET['page'];
	
		foreach ($result as $key){
			require_once './parts/'.$page.'.php';
		}
	}
else{
	foreach ($result as $key){
		include './parts/all_news.php';	
	}
}

if (isset($_GET['page']) and isset ($_POST['action'])) // ADD NEW POST TO DB MYSQL!
{
if (!empty($_POST['title']))
 {
 	if (!empty($_POST['text'])){
 		$dbh = db_connect ();
 		$stmt = $dbh->prepare("INSERT INTO posts (title, text, author) VALUES (:title, :text, :author)");

		$stmt->bindParam(':title', $title);
		$stmt->bindParam(':text', $text);
		$stmt->bindParam(':author', $author);

		$title = $_POST['title'];
		$text = $_POST['text'];
		$author = $_POST['author'];
		$stmt->execute() or die(print_r($stmt->errorInfo(), true));
 	}
 	else {echo "Поле с ТЕКСТОМ пустое!";}
 }
 else{echo "Поле НАЗВАНИЕ ПОСТА пустое!";}
}

