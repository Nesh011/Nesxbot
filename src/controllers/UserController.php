<?php
include_once 'src/models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function register($username, $password) {
        return $this->userModel->createUser($username, $password);
    }

    public function login($username, $password) {
        $user = $this->userModel->getUserByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['userId'] = $user['id'];
            return true;
        }
        return false;
    }
}
