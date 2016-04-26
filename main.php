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
                <label for="inp-facet">Команда:</label>
                <input id="inp-facet" type="text" name="command_parser" size="30" value="throw 10 d6 filter >= 2 sort desc" class="form-control">
            </div>
            <div class="btn_center">
                <input type="submit" value="Грати" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>
</body>
</html>