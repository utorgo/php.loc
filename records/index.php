<?php
    require __DIR__.'\records.php';
    $records = recordsArray();

    if (isset($_POST['newrecord']) ){

        $records[]= $_POST['newrecord'];
        $res = implode("\n", $records);
        file_put_contents(__DIR__.'\records.txt',$res);

        header('location:'. $_SERVER['PHP_SELF']);
        exit();
    }



    echo '<ol>';
    foreach ($records as $record){
        echo '<li>' . $record . '</li>';
    }
    echo '</ol>';

?>
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

    <form action="index.php" method="post">
        <input type="text" name="newrecord">
        <input type="submit">
    </form>
</body>
</html>