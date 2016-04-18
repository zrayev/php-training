<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Game</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="center">
  <div class="content">
    <form action="" method="get" role="form">
      <div class="form-group">
        <label>
          <p>Выберите количество граней</p>
          <input type="number" name="facet" value="1" min="1" max="6" class="form-control">
        </label>
      </div>
      <div class="form-group">
        <label>
          <p>Выберите количество бросков кубика</p>
          <input type="number" name="throw" value="1" min="1" max="20" class="form-control">
        </label>
      </div>
      <div class="form-group">
        <label>
          <p>Меньше какого значения не выводить</p>
          <input type="number" name="min_value" value="1" min="1" max="6" class="form-control">
        </label>
      </div>
      <div class="btn_center">
        <input type="submit" value="Играть" class="btn btn-danger">
      </div>
    </form>

    <?php for ($i = 0; $i < $count; $i++): ?>
      <!--Меняем значене класа в зависимоти от возвращаемого значения-->
      <div class="dice-<?php echo get_single_dice_result($dice_type); ?> dices"></div><br/>
    <?php endfor; ?>
  </div>
</div>
</body>
</html>
