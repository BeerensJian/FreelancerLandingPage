<?php

namespace Core;
use PDO;
use PDOStatement;

class Database
{
    private PDO $connection;
    private PDOStatement $statement;

    public function __construct(array $config, string $user = "root", string $pass = "")
    {
        $dsn_string = "mysql:" . http_build_query($config, "", ";");

        $this->connection = new PDO(
            $dsn_string,
            $user,
            $pass,
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }

    public function query(string $sql, array $params = []): self
    {
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($params);
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
