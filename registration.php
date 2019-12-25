<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial scale 1.0">
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Регистрация</title>
</head>
<body>
	<?php require "blocks/header.php" ?>

	<div class="container mt-5">
		<div class="row">
			<h3>Регистрация</h3>
			<form  action="registration_controller.php" method="post">
				<input name="login" class="form-control" placeholder="Введите имя пользователя"><br>
				<input type="text" name="name" placeholder="Введите ваше имя"
				class="form-control"><br>
				<input name="password" class="form-control" placeholder="Введите пароль"><br>
				<input name="password_confirm" class="form-control" placeholder="Подтвердите пароль"><br>
				<button type="submit" name="send" class="btn btn-outline-primary">Зарегистрироваться</button>
			</form>
		</div>
	</div>

	<?php require "blocks/footer.php" ?>
</body>
</html>