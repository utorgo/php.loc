<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <input type="number" name="x" value="<?php echo $x = $_GET['x'];?>">
            <input type="number" name="y" value="<?php echo $y = $_GET['y'];?>">
            <input type="submit" value="=">
            <?php
                echo $x*$y;
            ?>
        </form>
    </body>
</html>


