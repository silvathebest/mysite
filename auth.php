<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial scale 1.0">
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Контактная форма</title>
</head>
<body class="text-center">
	<?php require "blocks/header.php" ?>

	<div class="container mt-5">
		<div class="row">
			<h3 class="mr-5">Войдите в наш мир</h3>
			<form  action="auth_controller.php" method="post">
				<input name="login" class="form-control" placeholder="Введите имя пользователя">
				<input name="password" class="form-control" placeholder="Введите пароль"><br>
				<button class="btn btn-lg btn-primary btn-block" name="send" type="submit">Войти</button>
			</form>
		</div>
	</div>

	<?php require "blocks/footer.php" ?>
</body>
</html>