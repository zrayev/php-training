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
    <form action="" method="post" role="form">
      <div class="form-group">
        <label>
          <p>Выберите количество граней</p>
          <input type="number" name="facet" value="1" min="1" max="6"
                 class="form-control">
        </label>
      </div>
      <div class="form-group">
        <label>
          <p>Выберите количество бросков кубика</p>
          <input type="number" name="throw" value="1" min="1" max="20"
                 class="form-control">
        </label>
      </div>
      <div class="form-group">
        <label>
          <p>Меньше какого значения не выводить</p>
          <input type="number" name="min_value" value="1" min="1" max="6"
                 class="form-control">
        </label>
      </div>
      <div class="btn_center">
        <input type="submit" value="Играть" class="btn btn-danger">
      </div>
    </form>

    <?php $results = get_dice_results($options['dice_type'], $options['count']); ?>
    <?php foreach ($results as $result): ?>
      <!--Меняем значене класа в зависимоти от возвращаемого значения-->
      <?php if ($result >= $options['min_value']): ?>
        <div class="dice-<?php echo $result; ?> dices"></div><br/>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>
