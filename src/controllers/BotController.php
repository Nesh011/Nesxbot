<?php
include_once 'src/models/BotModel.php';

class BotController {
    private $botModel;

    public function __construct() {
        $this->botModel = new BotModel();
    }

    public function getBotPerformance($userId) {
        return $this->botModel->getPerformanceByUser($userId);
    }

    public function changeStrategy($userId, $strategy) {
        return $this->botModel->updateStrategy($userId, $strategy);
    }
}
