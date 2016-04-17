<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Game</title>
  <link rel="stylesheet" href="css/style.css">
</head>
  <body>

  <?php require_once('results.php'); ?>

    <form action="" method="get">
      <p>Выберите количество граней</p>
      <input type="number" name="facet" value="1" min="1" max="6">
      <p>Выберите количество бросков кубика</p>
      <input type="number" name="throw" value="1" min="1" max="20">
      <p>Меньше какого значения не выводить</p>
      <input type="number" name="min_value" value="1" min="1" max="6">
      <p>Поставте точку если хотине не выводить результат маньше 3х</p>
      <input type="radio" name="restriction" value="3">Значение меньше 3х</br></br>
      <input type="submit" value="Submit">
    </form>

    <?php for ($i = 0; $i < $count; $i++): ?>
    <!--Меняем значене класа в зависимоти от возвращаемого значения-->
    <div class="dice-<?php echo get_single_dice_result($min_value, $dice_type, $restriction); ?> dices"></div><br/>
    <?php endfor; ?>

  </body>

</html>