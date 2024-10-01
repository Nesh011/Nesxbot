<?php
include_once 'src/models/ContentModel.php';

class ContentController {
    private $contentModel;

    public function __construct() {
        $this->contentModel = new ContentModel();
    }

    public function getAllContent() {
        return $this->contentModel->getAll();
    }

    public function createContent($title, $body, $userId) {
        return $this->contentModel->create($title, $body, $userId);
    }

    public function editContent($id, $title, $body) {
        return $this->contentModel->edit($id, $title, $body);
    }

    public function deleteContent($id) {
        return $this->contentModel->delete($id);
    }
}
