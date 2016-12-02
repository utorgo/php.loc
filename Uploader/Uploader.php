<?php

/**
 * Created by PhpStorm.
 * User: upt
 * Date: 30.11.2016
 * Time: 0:34
 */
class Uploader
{
    protected $form;
    function __construct($inputFieldName)
    {
        $this->form =
            '<form action="/gallery/upload.php" enctype="multipart/form-data" method="post">
                <input type="file" name="' . $inputFieldName . '">
                <input type="submit">
            </form>';
    }

    public function isUploaded($inputFieldName)
    {
        return isset($_POST[$inputFieldName]);
    }

    public function upload($inputFieldName)
    {
        if (!empty($_FILES)){
            $uploaded = $_FILES[$inputFieldName];
            if(0 == $uploaded['error']){
                move_uploaded_file(
                    $uploaded['tmp_name'],
                    __DIR__. '/' .$uploaded['name']
                );
            }
        }
    }
}