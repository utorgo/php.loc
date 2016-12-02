<?php
$operator = $_POST['operator'];

switch ($operator){
    case '/': echo $x = $_POST['x'] / $y = $_POST['y'];
    break;
    case '-': echo $x = $_POST['x'] - $y = $_POST['y'];
    break;
    case '*': echo $x = $_POST['x'] * $y = $_POST['y'];
    break;
    default: echo $x = $_POST['x'] + $y = $_POST['y'];
}

var_dump($_POST);

?>
