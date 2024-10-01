<?php
include_once 'src/config/database.php';

class BotModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getPerformanceByUser($userId) {
        $query = "SELECT performance FROM bots WHERE createdBy = :userId";
        $params = [':userId' => $userId];
        return $this->db->fetch($query, $params);
    }

    public function updateStrategy($userId, $strategy) {
        $query = "UPDATE bots SET strategy = :strategy WHERE createdBy = :userId";
        $params = [':strategy' => $strategy, ':userId' => $userId];
        return $this->db->execute($query, $params);
    }
}
