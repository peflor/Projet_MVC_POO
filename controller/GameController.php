<?php 

require_once "modele/GameManager.php";
class GameController {
    private $gameManager;

    public function __construct(){
        $this->gameManager = new GameManager;
        $this->gameManager->loadGames();
    }

    public function displayGames(){
        $games = $this->gameManager->getGames();
        require_once "view/games.view.php";        
    }


    // public function countGames(){
    //     $games1 = $this->gameManager->getGames();
    //     echo count($games1);
        
    // }

    
    public function newGameForm(){
        require_once "view/new.game.view.php";
    }

    public function newGameValidation(){
        $this->gameManager->newGameDB($_POST['title'],$_POST['nbPlayers']);
        header('Location:'. URL . "games");
        
    }

    public function editGameForm($id){
        $game = $this->gameManager->getGameById($id);
        require_once "view/edit.game.view.php";
    }

    public function editGameValidation(){
        $this->gameManager->editGameDB($_POST['id-game'], $_POST['title'], $_POST['nbPlayers']);
        header('Location:'. URL . "games");
    }

    public function deleteGame($id){
        $this->gameManager->deleteGameBD($id);
        header("Location:". URL . "games");
    }

    
    
}
