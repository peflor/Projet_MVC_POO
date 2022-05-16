<?php 

require_once "modele/UserManager.php";
class UserController {
    private $userManager;

    public function __construct(){
        $this->userManager = new UserManager;
        $this->userManager->loadUsers();
    }

    public function displayUsers(){
        $users = $this->userManager->getUsers();
        require_once "view/users.view.php";
    }
}
