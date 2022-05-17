<?php

require_once "Manager.php";
require_once "GameUser.php";


class GameUserManager extends Manager{
    
    private $gameUser;

    public function addGameUser($gameUser){
        $this->gameUser[] = $gameUser;
    }

    public function getGameUser(){
        return $this->gameUser;
    }

    public function loadGamesUsers(){
        $req = $this->getBdd()->prepare("SELECT * FROM users INNER JOIN games WHERE users.id = games.users_id");
        $req->execute();
        $myUsersGames = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        $this->gameUser = $myUsersGames;
        var_dump($this->gameUser);
        
        foreach($myUsersGames as $game){
            $g = new GameUser($game['id'], $game['title'], $game['nb_players']);
            $this->addGameUser($g);
        }
    }
    
    
}