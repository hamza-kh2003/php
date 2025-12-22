<?php

class Database
{
    // Connection parameters (encapsulated)
    private string $host;
    private string $dbName;
    private string $username;
    private string $password;

    // PDO connection object
    protected ?PDO $connection = null;

    public function __construct(
        string $host,
        string $dbName,
        string $username,
        string $password
    ) {
        $this->host     = $host;
        $this->dbName   = $dbName;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }

    private function connect(): void
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8mb4";

            $this->connection = new PDO(
                $dsn,
                $this->username,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );

          

        } catch (PDOException $e) {
            // Stop execution safely if connection fails
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Optional getter (controlled access)
    public function getConnection(): ?PDO
    {
        return $this->connection;
    }
}
