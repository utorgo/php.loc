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

    class Item {
        protected $colors;
        public function __construct($color)
        {
            $this->colors = $color;
        }
        public function show()
        {
            echo $this->colors.'</br>';
        }
    }
    class Table extends Item {
        public $legs;
        public function show()
        {
            parent::show();
            echo $this->legs.'</br>';
        }
    }

    $table1 = new Table('red');
    $table1->legs = 3;
    //$table1->colors = 'red';
    $table1->show();

    $table2 = new Table('black');
    $table2->legs = 4;
    //$table2->colors = 'black';
    $table2->show();

?>
</body>
</html>