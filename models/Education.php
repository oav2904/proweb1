<?php 

class Education
{
    private $connection;
    function __construct($connection)
    {
        $this->connection = $connection;
    }

     public function find($id)
    {
        return $this->connection->runQuery('SELECT * education FROM WHERE id = $1', [$id]);
    }

    public function create($degree, $timeperiod, $description, $website, $id_user)
    {
        $this->connection->runStatement('INSERT INTO education (
    degree, timeperiod, description, website, id_user)
    VALUES ($1, $2, $3, $4, $5)', [$degree, $timeperiod, $description, $website, $id_user]);
    }

    public function read($id_user)
    {
        return $this->connection->runQuery('SELECT * FROM education  WHERE $id_user = $1', [$id_user] );
    }

    public function update($id,$degree, $timeperiod, $description, $website, $id_user)
    {
        $this->connection->runStatement('UPDATE education 
    SET $degree=$2, $timeperiod=$3, $description=$4, $website=$5, $id_user=$6
    WHERE id=$1', [$id,$degree, $timeperiod, $description, $website, $id_user]);
    }

    public function delete($id)
    {
        $this->connection->runStatement('DELETE FROM education 
    WHERE id=$1', [$id]);
    }
}



 ?>