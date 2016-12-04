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
//    class SomeClass {
//
//    }
//    $obj = new SomeClass();
//
//    //echo gettype($obj);
//    echo get_class($obj);
//    var_dump(
//            $obj instanceof stdClass
//    )
//class User{
//
//}
//
//class Admin extends User{
//
//
//}
//function sendMail(User $user, $message)
//{
//    echo 'Sending ...';
//}
//
//$user = new User();
//
//sendMail($user,'test');
require_once 'GuestBook.php';
require_once 'GuestBookRecord.php';

$gb = new GuestBook(__DIR__.'/db.txt', FILE_IGNORE_NEW_LINES);

var_dump($gb->getAll());

?>

</body>
</html>