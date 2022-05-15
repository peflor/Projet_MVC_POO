<?php
require_once "Manager.php";

class GameManager extends Manager{

    private $games;

    public function addGame($game){
        $this->games[] = $game;
    }

    public function getGames(){
        return $this->games;
    }

    public function loadGames(){
        $req = $this->getBdd()->prepare("SELECT * FROM games");
        $req->execute();
        $myGames = $req->fetchAll();
        $req->closeCursor();
        echo "<pre>";
        print_r($myGames);
        echo "</pre>";
    }

}


?>