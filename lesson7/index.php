<?php

require __DIR__ . '/../classes/View.php';

require __DIR__.'/../classes/GuestBook.php';

$gb = new GuestBook(__DIR__.'/db.txt');

$data = $gb->getAll();

//$dsn = 'mysql:host=127.0.0.1;dbname=test';

//$dbh = new PDO($dsn,'test','+1279484');

//$sth = $dbh->prepare('SELECT * from persons WHERE age>:age');

//$sth->execute([':age' => 40]);

//$data = $sth->fetchAll();

//echo $dsn;

var_dump($data);

$view = new View();

$view->assign('persons',$data);

$view->display(__DIR__.'/../templates/persons.php');

