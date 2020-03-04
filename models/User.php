<?php


class User
{
    private $connection;
    function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function login($email, $password)
    {
        return $this->connection->runQuery('SELECT * FROM users WHERE email = $1 and password = md5($2)', [$email, $password]);
    }
}