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
  <?php require "blocks/header.php" ?>
  <div class="album py-5">
    <div class="container">
      <div class="row">
        <?php
        for($i = 0; $i < 23; $i++):
          ?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
             <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
             <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <a class="btn btn-outline-secondary" href="img/<?php echo ($i + 1) ?>.jpg" target="_blank">View</a>
                <small class="text-muted">Наташенька и Лешенька</small>
              </div>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</div>
<?php require "blocks/footer.php" ?>
</body>
</html>