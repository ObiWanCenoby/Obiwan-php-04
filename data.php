<?php

require_once './class/class.php';
$pass="123456";

function db_connect (){
$username ='root';
$password ='';
$dbname='my_blog';
$host='localhost';

$dsn="mysql:dbname=$dbname;host=$host";

	try {
		$dbh =new PDO ($dsn, $username, $password);
		$dbh->exec("set names utf8");
		return $dbh;
	}
	catch(PDOException $error){
		echo 'ERROR WARNING: '. $error->getMessage();
	}

}

function bad_id($id){
	$dsn = db_connect();
	$res = $dsn->query("SELECT id FROM posts WHERE id = $id"); 
	$l_records = $res->fetch(PDO::FETCH_ASSOC);
	if (!$l_records){
		return "ВАХ ... нет такого ID <br /> <strong>PAGE 404 not FOUND... </strong>";
	}
}


?>