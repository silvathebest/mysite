<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<a class="my-0 mr-md-auto font-weight-normal text-dark" href="/">Лёша и Наташа</a>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="p-2 text-dark" href="/future.php">Будущее</a>
		<a class="p-2 text-dark" href="/history.php">История</a>
		<a class="p-2 text-dark" href="/about.php">Контакты</a>
		<a class="p-2 text-dark" href="/gallery.php">Фотки</a>
	</nav>	
	<a class="btn btn-outline-primary" href="/registration.php">Регистрация</a>
	<?php
	if($_COOKIE['user'] == ''):
		?>
		<a class="btn btn-outline-primary ml-3" href="/auth.php">Войти</a>
		<?php else: ?>
			<a class="btn btn-outline-primary ml-3" href="/exit.php">Выйти</a>
		<?php endif; ?>

	</div>