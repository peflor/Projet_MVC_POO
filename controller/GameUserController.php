<?php 

require_once "modele/GameUserManager.php";
class GameUserController {
    private $gameUserManager;
    private $gameNoUserManager;

    public function __construct(){
        $this->gameUserManager = new GameUserManager;
        $this->gameUserManager->loadGamesUsers();
    }

    public function displayGamesUsers(){
        $gamesUsers = $this->gameUserManager->getGameUser();
        require_once "view/home.view.php";
    }

    

   

    // public function newGameForm(){
    //     require_once "view/new.game.view.php";
    // }

    // public function newGameValidation(){
    //     $this->gameManager->newGameDB($_POST['title'],$_POST['nbPlayers']);
    //     header('Location:'. URL . "games");
        
    // }

    // public function editGameForm($id){
    //     $game = $this->gameManager->getGameById($id);
    //     require_once "view/edit.game.view.php";
    // }

    // public function editGameValidation(){
    //     $this->gameManager->editGameDB($_POST['id-game'], $_POST['title'], $_POST['nbPlayers']);
    //     header('Location:'. URL . "games");
    // }

    // public function deleteGame($id){
    //     $this->gameManager->deleteGameBD($id);
    //     header("Location:". URL . "games");
    // }

    
    
} 
