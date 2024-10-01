<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'php_cms';
    private $username = 'root';
    private $password = '';

    public function connect() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
            die();
        }
    }

    public function fetchAll($query) {
        $stmt = $this->connect()->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetch($query, $params) {
        $stmt = $this->connect()->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function execute($query, $params) {
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute($params);
    }
}
