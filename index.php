<?php
require_once './data.php';
?>

<html>
<head>
  <title>Познай свой Дзэн.</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')</script>
</head>
<body>
<div class="container">
	<div class="row" id="header">
		<div class="col-md-12">
			<img src="./img/shapka.jpg">
		</div>
	</div>
	<div class="row" id="content">
		<div class="col-md-3" id="sidebar">
			<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
				<?php require_once './parts/menu.php';?>		
			</div>
		</div>
		<div class="col-md-9" id="text">
			<div class="row" id="state_trip">
				<div class="col-md-5">
						<div class="form-group">
							<p class="form-control-static">
								<?php require_once './parts/UserPassword.php';?>
							</p>
						</div>
				</div>
				<div align="right" class="col-md-7">
					<form action="?" method="post" class="form-inline">
						<div class="form-group">
							<input type="password" class="form-control" name="user_password" id="inputPassword2" placeholder="Запаролиться ...">
						</div>
						<button type="submit" class="btn btn-default">Почекать</button>
					</form>
				</div>
			</div>
		<?php require_once ('./parts/content.php');	?>
	</div>
</div>
<div class="row" id="footer">
		<div class="col-md-12">
		  <H3>
			   <span class="label label-default">
					Copyright Obi-Wan Kenobi 2016
			   </span>
		  </H3>
		</div>
	</div>
</div>
</body>
</html>