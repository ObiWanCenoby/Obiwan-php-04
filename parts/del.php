<?php 
if ($_GET['page']=='del' and (!bad_id($_GET['id']))  and !empty($_GET['id']))
{ 
	$dbh = db_connect ();
	$sql = "DELETE FROM posts WHERE id = :id";
	$stmt = $dbh->prepare($sql);
	$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);   
	$stmt->execute() or die(var_dump($stmt->errorInfo(), true));

	$count = $dbh->exec("DELETE FROM posts WHERE id = '".$_GET['id']."'");
	ECHO "Удалено: ".$count." запись -> с id=". $_GET['id'];

}
{
	ECHO "Нечего тут удалять.. <br> <strong>404 PAGE NOT FOUND...</strong>";
}

	