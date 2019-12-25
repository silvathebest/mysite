<?php
	$login = filter_var(trim($_POST['login']),
		FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),
		FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
		FILTER_SANITIZE_STRING);
	$password_confirm = filter_var(trim($_POST['password_confirm']),
		FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 5 || mb_strlen($login) > 20){
		echo "Недопустимая длина логина";
		exit();
	}else if(mb_strlen($name) < 3 || mb_strlen($name) > 30){
		echo "Недопустимая длина имени";
		exit();
	}else if(mb_strlen($password) < 6 || mb_strlen($password) > 20){
		echo "Недопустимая длина пароля(от 6 до 20 символов)";
		exit();
	}else if ($password != $password_confirm){
		echo "Пароли не совпадают";
		exit();
	}

	$password = md5($password."sadlldasda3215");

	$mysql = new mysqli('127.0.0.1', 'root', '', 'register-bd');
	$mysql->query("INSERT INTO `users` (`login` , `pass`, `name`)
	 VALUES('$login', '$password', '$name')");

	$mysql->close();

	header('Location: /');
?>