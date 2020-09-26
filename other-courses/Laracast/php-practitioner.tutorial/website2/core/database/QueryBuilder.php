<?php

class QueryBuilder
{

    protected $pdo;

    // The Querybuilder depends on a pdo instance
    public function __construct (PDO $pdo)
    {
        // Delegate to connection class
        $this->pdo = $pdo;
    }

    // Select everything from a particular table
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        // Fetch results into an object (fetchAll gets the complete Db, bad practice for large dbs)
        return $statement->fetchAll(PDO::FETCH_CLASS);
        }
}