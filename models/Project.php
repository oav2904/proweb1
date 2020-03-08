<?php 

class Project
{
    private $connection;
    function __construct($connection)
    {
        $this->connection = $connection;
    }

     public function find($id)
    {
        return $this->connection->runQuery('SELECT * FROM projects WHERE id = $1', [$id]);
    }

    public function create($name, $platform, $description, $url, $id_user)
    {
        $this->connection->runStatement('INSERT INTO projects(
    name, platform, description, url, id_user)
    VALUES ($1, $2, $3,$4,$5)'), [$name, $platform, $description, $url, $id_user]);
    }

    public function read($id_user)
    {
        return $this->connection->runQuery('SELECT * FROM projects WHERE $id_user = $1', [$id_user] );
    }

    public function update($id,$name, $platform, $description, $url, $id_user)
    {
        $this->connection->runStatement('UPDATE projects
    SET name=$2, platform=$3, description=$4, url=$5 id_user=$6
    WHERE id=$1', [$id,$name, $platform, $description, $url, $id_user]);
    }
    public function delete($id)
    {
        $this->connection->runStatement('DELETE FROM projects
    WHERE id=$1', [$id]);
    }
}
 ?>