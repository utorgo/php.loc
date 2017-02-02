<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
    <style>
        li{
            margin-bottom: 15px;
            padding: 10px;
            border: 1px dotted;
        }
    </style>
</head>
<body>
    <h1>Записи:</h1>
    <hr>
    <ul>
        <?php foreach ($book as $line){?>
        <li><?php echo $line->getMessage();?></li>
        <?php }?>
    </ul>

</body>
</html>