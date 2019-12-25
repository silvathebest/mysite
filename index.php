<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial scale 1.0">
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>mysite</title>
</head>
<body>
		<div class="container mt-5" >
	<?php require "blocks/header.php" ?>
		<h3 class="mb-5">Привет, <?=$_COOKIE['user']?> взгляни на нашу жизнь</h3>
		<div class="d-flex flex-wrap">
			<?php
			for($i = 0; $i<5;$i++):
				?>
				
				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						<img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
						<div class="card-body">
							<p class="card-text"></p>
							<div class="d-flex justify-content-between align-items-center">
								<a class="btn btn-outline-primary" href="img/<?php echo ($i + 1) ?>.jpg" target="_blank">View</a>
							</div>
						</div>
					</div>
				</div>

			<?php endfor; ?>
			<iframe class="col-md-4" width="560" height="315" src="https://www.youtube.com/embed/pWfNNuzy2e4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
	<?php require "blocks/footer.php" ?>
</body>
</html>

