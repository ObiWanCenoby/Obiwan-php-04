<?php

function add_news ()
{?>
<form action="?page=add_news&status=ok" method="POST">
			<strong>Название:</strong> <input type="text" name="title"> <br>
			<strong>Автор:</strong> <input type="text" name="author"> <br>
			<textarea rows="10" cols="45" name="content"  placeholder="текст..."></textarea>
			<input type="submit" name="action" value="Add ANP">
		</form>
<?php
}

function ok()
{
Echo "Запись добавлена!";
}
?>

<div class="row">
	<div class="col-md-4">
		<b>ANP..... Add New Posts.</b><br><br>
	</div>
	
</div>
<div class="row">
	<div align="right" class="col-md-5">
		<?php  if (empty($_GET['status'])){$page ();}
				else{
					$_GET['status'] ();	
				}

		?>
	</div>
</div>

