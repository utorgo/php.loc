<?php

/**
 * Created by PhpStorm.
 * User: upt
 * Date: 12/3/16
 * Time: 10:57 PM
 */
class GuestBookRecord
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
}
