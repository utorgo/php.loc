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
<?php

    $res = file(__DIR__. '/db.txt');
    $res[] = 'Слова народные';
    $str = implode("\n", $res);

    //file_put_contents(__DIR__.'/db.txt',$str);
    var_dump($res);
?>
</body>
</html>