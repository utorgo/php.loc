<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Горячие новости</title>
    <style>
        li{
            margin-bottom: 15px;
            padding: 10px;
            border: 1px dotted;
        }
    </style>
</head>
<body>          
        <h1>Содержание новости:</h1>
        <hr>
        <?php if(isset($_GET['id'])) { $id = $_GET['id'] ?>
        <h2><?php echo $articles[$id]->getName(); ?></h2>
        <p><?php echo $articles[$id]->getContent(); }?></p>
</body>
</html>