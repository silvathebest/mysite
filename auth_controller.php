<?php 
	$login = filter_var(trim($_POST['login']),
		FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
		FILTER_SANITIZE_STRING);

	$password = md5($password."sadlldasda3215");

	$mysql = new mysqli('127.0.0.1', 'root', '', 'register-bd');
	
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$password'");
	$user = $result->fetch_assoc();
	if(count($user) == 0){
		echo "Такой пользователь не найден";
		exit();
	}

	setcookie('user', $user['name'], time() + 3600, "/");

	$mysql->close();

	header('Location: /');
?>