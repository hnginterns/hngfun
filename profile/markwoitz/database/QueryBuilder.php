<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchOne($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} LIMIT 1");

        $statement->execute();

        return $statement->fetch();
    }
}