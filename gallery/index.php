<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
        <?php

            // Sort in ascending order - this is default
            $imagesArray = scandir(__DIR__);
            //print_r($imagesArray);
            foreach ($imagesArray as $id=>$image){
                if(strpos($image,'jpg')){
                    echo '<a href="/gallery/image.php?id=' . $image. '"><img src="'. $image .'" alt="HTML tutorial" style="width:20%;height:20%;border:0;"></a></br>';
                }
            }
        ?>
        <form action="/gallery/upload.php" enctype="multipart/form-data" method="post">
            <input type="file" name="myimage">
            <input type="submit">
        </form>
    </body>
</html>



