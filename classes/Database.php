<?php

class Database 
{
    public $connection;
    public $statement;

    public function __construct(array $config, string $username = "root", string $password = "")
    {
        $dsn = vsprintf("mysql:host=%s;port=%d;dbname=%s;charset=%s", $config);
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query(string $query,array $params = []) 
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    // GENERICS
    public function findOne()
    {
        return $this->statement->fetch();
    }

    public function find()
    {
        return $this->statement->fetchAll();
    }

    // VALIDATE
    public function findOrFail()
    {
        $result = $this->statement->fetch();
        if (!$result) {
            abort(Response::NOT_FOUND);
        }
        return $result;
    }
}