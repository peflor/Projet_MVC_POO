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

    public function newUserForm(){
        require_once "view/new.user.view.php";
    }

    public function newUserValidation(){
        $this->userManager->newUserDB($_POST['nom'],$_POST['prenom']);
        header('Location:'. URL . "users");
    }

    public function editUserForm($id){
        $user = $this->userManager->getUserById($id);
        require_once "view/edit.user.view.php";
    }

    public function editUserValidation(){
        $this->userManager->editUserDB($_POST['id-user'], $_POST['nom'], $_POST['prenom']);
        header('Location:'. URL . "users");
    }
}
