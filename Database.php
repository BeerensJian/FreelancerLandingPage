<?php

class Database
{
    private PDO $connection;
    private PDOStatement $statement;

    public function __construct(array $config, string $user = "root", string $pass = "root")
    {
        extract($config);
        $this->connection = new PDO(
            "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset",
            $user,
            $pass,
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }

    public function query(string $sql, array $params = []): self
    {
        $this->statement = $this->connection->prepare($sql, $params);
        return $this;
    }

    public function fetchAll(): array
    {
        return $this->statement->fetchAll();
    }

    public function fetch(): array
    {
        return $this->statement->fetch();
    }
}
