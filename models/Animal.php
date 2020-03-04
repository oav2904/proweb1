<?php


class Animal
{
    private $connection;
    function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function find($id)
    {
        return $this->connection->runQuery('SELECT * FROM animals WHERE id = $1', [$id]);
    }

    public function create($name)
    {
        $this->connection->runStatement('INSERT INTO animals(
    name)
    VALUES ($1)', [$name]);
    }

    public function read()
    {
        return $this->connection->runQuery('SELECT * FROM animals ORDER BY id');
    }

    public function update($id, $name)
    {
        $this->connection->runStatement('UPDATE animals
    SET name=$2
    WHERE id=$1', [$id, $name]);
    }

    public function delete($id)
    {
        $this->connection->runStatement('DELETE FROM animals
    WHERE id=$1', [$id]);
    }
}