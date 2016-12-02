<?php
    require __DIR__ .'\cities.php';
    require __DIR__. '\findcity.php';

    $lastLetter = $_POST['city'];

    $lastLetter = mb_substr($lastLetter,mb_strlen($_POST['city'])-1,1,'utf8');

    echo findCity($cities,$lastLetter);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="city" value="Геленжик">
        <input type="submit">
    </form>
</body>
</html>