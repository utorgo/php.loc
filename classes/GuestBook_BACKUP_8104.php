<?php
<<<<<<< HEAD:classes/GuestBook.php
require __DIR__ . '/GuestBookRecord.php';
=======

>>>>>>> d12a93c9fa07709beea16eb0c8d407a0866d8576:lesson6/GuestBook.php
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