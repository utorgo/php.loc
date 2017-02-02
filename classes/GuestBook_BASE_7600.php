<?php

/**
 * Created by PhpStorm.
 * User: upt
 * Date: 12/3/16
 * Time: 11:16 PM
 */
class GuestBook
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function getAll()
    {
        $data = file($this->file);
        $ret = [];

        foreach ($data as $line){
            $ret[] = new GuestBookRecord($line);
        }

        return $ret;
    }
}

