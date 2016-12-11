<?php

class GuestBookRecord
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
}