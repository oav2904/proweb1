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
        return $this->connection->runQuery('SELECT * FROM users WHERE email = $1 and password = $2', [$email, $password]);
    }

     public function find($id)
    {
        return $this->connection->runQuery('SELECT * FROM users WHERE id = $1', [$id]);
    }

    public function create($p_name,$s_name, $f_lastname, $s_lastname, $email,$password, $birthday, $img, $about, $position,$location)
    {
        $this->connection->runStatement('INSERT INTO users(
    f_name, s_name, f_lastname,s_lastname,email, password, birthday, img, about, position, location)
    VALUES ($1,$2,$3,$4,$5,$6,$7,$8,$9,$10, $11)', [$p_name,$s_name, $f_lastname, $s_lastname, $email, $password, $birthday, $img, $about, $position,$location]);
    }

    public function read()
    {
        return $this->connection->runQuery('SELECT * FROM users ORDER BY id');
    }

    public function update($id, $p_name,$s_name, $f_lastname, $s_lastname, $email, $password, $birthday, $img, $about, $position,$location)
    {
        $this->connection->runStatement('UPDATE users
    SET f_name=$2, s_name = $3, f_lastname= $4,s_lastname= $5, $email = $6, password= $7, birthday= $8, img= $9, about= $10, position= $11, location= $12
    WHERE id=$1', [$id, $p_name,$s_name, $f_lastname, $s_lastname, $email, $password, $birthday, $img, $about, $position,$location]);
    }

    public function delete($id)
    {
        $this->connection->runStatement('DELETE FROM users
    WHERE id=$1', [$id]);
    }
}