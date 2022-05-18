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
        

        // $req2 = $this->getBdd()->prepare("SELECT * FROM users INNER JOIN games WHERE users.id = games.users_id OR games.users_id = NULL ");
        // $req2->execute();
        // $myUsersGames2 = $req2->fetchAll(PDO::FETCH_ASSOC);
        // $req2->closeCursor();
        
        // var_dump($myUsersGames2);
        
        foreach($myUsersGames as $gameUser){
            $gU = new GameUser($gameUser['id'], $gameUser['nom'], $gameUser['prenom'], $gameUser['title'], $gameUser['nb_players'], $gameUser['users_id']);
            $this->addGameUser($gU);
        }

    }

    
    
    
}