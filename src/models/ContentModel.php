<?php
include_once 'src/config/database.php';

class ContentModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        $query = "SELECT * FROM content";
        return $this->db->fetchAll($query);
    }

    public function create($title, $body, $userId) {
        $query = "INSERT INTO content (title, body, createdBy) VALUES (:title, :body, :userId)";
        $params = [':title' => $title, ':body' => $body, ':userId' => $userId];
        return $this->db->execute($query, $params);
    }

    public function edit($id, $title, $body) {
        $query = "UPDATE content SET title = :title, body = :body WHERE id = :id";
        $params = [':title' => $title, ':body' => $body, ':id' => $id];
        return $this->db->execute($query, $params);
    }

    public function delete($id) {
        $query = "DELETE FROM content WHERE id = :id";
        $params = [':id' => $id];
        return $this->db->execute($query, $params);
    }
}
