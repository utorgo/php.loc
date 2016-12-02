<?php
    if (!empty($_FILES)){
        $uploaded = $_FILES['myimage'];
        if(0 == $uploaded['error']){
            move_uploaded_file(
                $uploaded['tmp_name'],
                __DIR__. '/' .$uploaded['name']
            );
        }
    }
    var_dump(__DIR__);
    var_dump($_FILES);