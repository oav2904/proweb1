<?php 

class Contribution
{
    private $connection;
    function __construct($connection)
    {
        $this->connection = $connection;
    }
     public function find($id)
    {
        return $this->connection->runQuery('SELECT * FROM contributions WHERE id = $1', [$id]);
    }

    public function create($name, $description, $url, $id_user)
    {
        $this->connection->runStatement('INSERT INTO contributions(
    name, description, url, id_user)
    VALUES ($1, $2, $3, $4, $5)', [$name, $description, $url, $id_user]);
    }
    public function read($id_user)
    {
        return $this->connection->runQuery('SELECT * FROM contributions WHERE $id_user = $1', [$id_user] );
    }
    public function update($id, $name, $description, $url, $id_user)
    {
        $this->connection->runStatement('UPDATE contributions 
    SET name=$2, v$description=$3, $url=$4, id_user=$5
    WHERE id=$1', [$id,$name, $description, $url, $id_user]);
    }
    public function delete($id)
    {
        $this->connection->runStatement('DELETE contributions FROM 
    WHERE id=$1', [$id]);
    }
}
 ?>