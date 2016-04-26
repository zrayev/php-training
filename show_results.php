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
        <?php
        $results = parser($command_parser);
        foreach ($results as $result): ?>
            <div class="dice-<?php echo $result; ?> dices"></div><br/>
        <?php endforeach;
        if (empty($results)) {
            echo 'Спробуйте ще..';
        }
        ?>
        <form action="index.php" method="post" role="form">
            <div class="btn_center">
                <input type="submit" value="Назад" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>
</body>
</html>