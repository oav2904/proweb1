<?php 

class Experience
{
    private $connection;
    function __construct($connection)
    {
        $this->connection = $connection;
    }

     public function find($id)
    {
        return $this->connection->runQuery('SELECT * FROM experience WHERE id = $1', [$id]);
    }

    public function create($company, $position, $description, $timeperiod, $id_user)
    {
        $this->connection->runStatement('INSERT INTO experience(
    company, "position", description, timeperiod, id_user)
    VALUES ($1, $2, $3, $4, $5,)', [$company, $position, $description, $timeperiod, $id_user]);
    }

    public function read($id_user)
    {
        return $this->connection->runQuery('SELECT * FROM experience WHERE $id_user = $1', [$id_user] );
    }

    public function update($company, $position, $description, $timeperiod, $id_user)
    {
        $this->connection->runStatement('UPDATE experience
    SET company=$2, "position"=$3, description=$4, timeperiod=$5, id_user=$6
    WHERE id=$1', [$id,$company, $position, $description, $timeperiod, $id_user]);
    }

    public function delete($id)
    {
        $this->connection->runStatement('DELETE FROM experience
    WHERE id=$1', [$id]);
    }
}

 ?>