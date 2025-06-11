<?php

class Database
{
    private $pdo;

    public function __construct()
    {
        $dsn = DBTYPE . ':host=' . HOST . ';dbname=' . DBNAME . ';charset=' . CHARSET;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this -> pdo = new PDO( $dsn, DBUSER, DBPASSWORD, $options );
            // echo "연결 성공";
        } catch (PDOException $e) {
            echo "연결 실패 : " . $e -> getMessage();
            die();
        }
    }

    public function getConnection()
    {
        return $this -> pdo;
    }
}

?>