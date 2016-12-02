<?php
    require __DIR__ . '/calc.php';

    if (isset($_POST['x'])){
        $x = $_POST['x'];
    }
    if (isset($_POST['y'])){
        $y = $_POST['y'];
    }
    if (isset($_POST['operator'])){
        $operator = $_POST['operator'];
    }


?>
<html>
    <head>
        <title>Калькулятор</title>
    </head>
    <body>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="number" name="x" value="<?php echo $x;?>">

            <select name="operator">
                <option value="+" <?php if (isset($_POST['operator'])&&$_POST['operator']=='+'){ echo 'selected';}?>>+</option>
                <option value="-" <?php if (isset($_POST['operator'])&&$_POST['operator']=='-'){ echo 'selected';}?>>-</option>
                <option value="*" <?php if (isset($_POST['operator'])&&$_POST['operator']=='*'){ echo 'selected';}?>>*</option>
                <option value="/" <?php if (isset($_POST['operator'])&&$_POST['operator']=='/'){ echo 'selected';}?>>/</option>
            </select>

            <input type="number" name="y" value="<?php echo $y;?>">
            <input type="submit" value="=">
            <?php echo calc($x,$y,$operator);?>

        </form>
    </body>
</html>




