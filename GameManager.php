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

}


?>