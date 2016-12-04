<?php

/**
 * Created by PhpStorm.
 * User: upt
 * Date: 30.11.2016
 * Time: 0:26
 */
class MyGuestBook extends TextFile
{
    protected $records;

    function __construct($pathToFile)
    {
       $this->records = file(__DIR__.'\records.txt',FILE_IGNORE_NEW_LINES);
    }
    public function getData()
    {
        return $this->records;
    }
    public function append($text)
    {
        $this->records[] = $text;
    }
    public function save()
    {
        file_put_contents(__DIR__.'\records.txt',$this->records);
    }
}