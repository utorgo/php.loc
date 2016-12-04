<?php
/**
 * Created by PhpStorm.
 * User: upt
 * Date: 12/3/16
 * Time: 11:52 PM
 */
ob_start();

    echo 'Hello';

$str = ob_get_contents();

ob_end_clean();

    echo 'World!!!';

    echo $str;