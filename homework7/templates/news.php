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
        <h1>Заголовки новостей:</h1>
        <hr>
        <ul>
            <?php $id = 0; foreach ($articles as $article){?>

            <li>
            	<a href="/homework7/article.php?id=<?php echo $id++ ?>"><?php echo $article->getName(); ?></a>
            	<p> <?php echo mb_substr($article->getContent(),0,250) . '...';?></p>
            </li>
            <?php }?>
        </ul>    
</body>
</html>