<?php

class DB
{
    protected $dbh;

    public function __construct($file)
    {
       $dbtype ='mysql';
        $host = '127.0.0.1';
        $dbname = 'test';
        $user ='test';
        $password = '+1279484';

        $connect = $dbtype . ':host=' . $host.';';

        echo $connect;

        $this->dbh = new PDO($connect,$user,$password);

    }
}