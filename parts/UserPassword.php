<?php 
if (isset($_POST['user_password'])){
	if ($_POST['user_password']!='' and $_POST['user_password']==$pass){
		$del='ok';
		echo "Отныне ты будешь носить имя <b><a href=\"?page=add_news\">Дарт Вейдер</a></b>";
	}
	else 
	{
		echo"Что-то не так...";
	}
}
else 
{
	Echo"Выполнить приказ 66";
}