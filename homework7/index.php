<?php
require __DIR__ . '/../classes/View.php';

require __DIR__.'/classes/News.php';

$news = new News(__DIR__.'/db.txt');

$articles = $news->getAllNews();

$view = new View();

$view->assign('articles',$articles);

$view->display(__DIR__.'/templates/news.php');

