<?php
include_once 'src/models/ContentModel.php';

class AdminController {
    private $contentModel;

    public function __construct() {
        $this->contentModel = new ContentModel();
    }

    public function getAdminContent() {
        return $this->contentModel->getAll();
    }
}
