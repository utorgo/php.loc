<?php
/**
 * Created by PhpStorm.
 * User: upt
 * Date: 25.11.2016
 * Time: 19:37
 */
$days = explode(',', 'понедельник, вторник, среда, четверг, пятница, суббота, воскресение');
var_dump($_GET);
$code = $_GET['code'];
echo $days[$code];