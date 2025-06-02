<?php

class Database
{
    private $host = 'localhost';
    private $db_name = 'test_mvc';
    private $username = 'root';
    private $password = '';
    private $charset = 'utf8mb4';
    private $pdo;

    public function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO( $dsn, $this->username, $this->password, $options );
        } catch (PDOException $e) {
            die( "DB 연결 실패 : " . $e->getMessage() );
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}

?>