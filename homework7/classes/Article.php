<?php

class Article
{
    protected $name;
    protected $content;

    public function __construct($line)
    {
        $arr = explode("/", $line);

        $this->name = $arr[0];

        $this->content = $arr[1];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getContent()
    {
        return $this->content;
    }
}
