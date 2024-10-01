<?php
include_once 'src/config/database.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function createUser($username, $password) {
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $params = [':username' => $username, ':password' => password_hash($password, PASSWORD_DEFAULT)];
        return $this->db->execute($query, $params);
    }

    public function getUserByUsername($username) {
        $query = "SELECT * FROM users WHERE username = :username";
        $params = [':username' => $username];
        return $this->db->fetch($query, $params);
    }
}
