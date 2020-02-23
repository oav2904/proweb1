<?php

declare(strict_types=1);

namespace crojasaragonez\UtnDb;

class PgConnection extends DbConnection
{
    private $connection;
    public function __construct($user, $password, $database, $port, $server)
    {
        parent::__construct($user, $password, $database, $port, $server);
    }

    public function connect()
    {
        $this->connection = pg_connect("user=$this->user password=$this->password dbname=$this->database port=$this->port host=$this->server ");
    }

    public function disconnect()
    {
        pg_close($this->connection);
    }

    public function runQuery($sql, $params = [])
    {
        return pg_fetch_all($this->runStatement($sql, $params));
    }

    public function runStatement($sql, $params = [])
    {
        return pg_query_params($this->connection, $sql, $params);
    }
}
