<?php 

class Skill
{
    private $connection;
    function __construct($connection)
    {
        $this->connection = $connection;
    }

     public function find($id)
    {
        return $this->connection->runQuery('SELECT * FROM skills WHERE id = $1', [$id]);
    }

    public function create($name, $value, $id_user)
    {
        $this->connection->runStatement('INSERT INTO skills(
	name, value, id_user)
	VALUES ($1, $2, $3)'), [$name, $value, $id_user]);
    }

    public function read($id_user)
    {
        return $this->connection->runQuery('SELECT * FROM skills WHERE $id_user = $1', [$id_user] );
    }

    public function update($id, $name, $value, $id_user)
    {
        $this->connection->runStatement('UPDATE skills
	SET name=$2, value=$3, id_user=$4
    WHERE id=$1', [$id,$name, $value, $id_user]);
    }

    public function delete($id)
    {
        $this->connection->runStatement('DELETE FROM skills
    WHERE id=$1', [$id]);
    }
}






 ?>