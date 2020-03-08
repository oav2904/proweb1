<?php 

class Knowleadge {
    private $connection;
    function __construct($connection)
    {
        $this->connection = $connection;
    }

     public function find($id)
    {
        return $this->connection->runQuery('SELECT * FROM knowleadge WHERE id = $1', [$id]);
    }

    public function create($name, $id_user)
    {
        $this->connection->runStatement('INSERT INTO knowdleage(
    name, id_user)
    VALUES ($1, $2,', [$name, $id_user]);
    }
    
    public function read($id_user)
    {
        return $this->connection->runQuery('SELECT * FROM knowdleage WHERE $id_user = $1', [$id_user] );
    }
    public function update($id, $name,$id_user)
    {
        $this->connection->runStatement('UPDATE knowdleage
    SET name=$2, id_user=$3
    WHERE id=$1', [$id,$name, $id_user]);
    }
    public function delete($id)
    {
        $this->connection->runStatement('DELETE FROM skills
    WHERE id=$1', [$id]);
    }
}
 ?>