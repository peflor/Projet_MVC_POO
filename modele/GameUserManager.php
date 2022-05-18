<?php

require_once "Manager.php";
require_once "GameUser.php";


class GameUserManager extends Manager{
    
    private $gameUser;
    private $gameNoUser;
    

    public function addGameUser($gUser){
        $this->gameUser[] = $gUser;
    }

    public function getGameUser(){
        return $this->gameUser;
    }

    public function loadGamesUsers(){
        $req = $this->getBdd()->prepare("SELECT * FROM users INNER JOIN games WHERE users.id = games.users_id");
        $req->execute();
        $myUsersGames = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        // var_dump($this->gameUser);
        
        foreach($myUsersGames as $gameUser){
            $gU = new GameUser($gameUser['id'], $gameUser['nom'], $gameUser['prenom'], $gameUser['title'], $gameUser['nb_players'], $gameUser['users_id']);
            $this->addGameUser($gU);
        }
    }

    public function addNoGameUser($gUser){
        $this->gameNoUser[] = $gUser;
    }

    public function getNoGameUser(){
        return $this->gameNoUser;
    }

    public function loadGamesNoUsers(){
        $req = $this->getBdd()->prepare("SELECT * FROM users INNER JOIN games WHERE users.id = NULL");
        $req->execute();
        $myUsersNoGames = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        // var_dump($this->gameUser);
        
        foreach($myUsersNoGames as $gameUser){
            $gU = new GameUser($gameUser['id'], $gameUser['nom'], $gameUser['prenom'], $gameUser['title'], $gameUser['nb_players'], $gameUser['users_id']);
            $this->addNoGameUser($gU);
        }
    }
    
    
    
}