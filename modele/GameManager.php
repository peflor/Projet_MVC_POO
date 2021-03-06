<?php
require_once "Manager.php";
require_once "Game.php";

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
        $myGames = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        // var_dump($myGames);

        foreach($myGames as $game){
            $g = new Game($game['id'], $game['title'], $game['nb_players']);
            $this->addGame($g);

        }
    }



    public function newGameDB($title,$nbPlayers){
        $req = "INSERT INTO games (title, nb_players)
                Values (:title, :nbPlayers)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":title",$title, PDO::PARAM_STR);
        $statement->bindValue(":nbPlayers",$nbPlayers, PDO::PARAM_INT);
        $result = $statement->execute();
        $statement->closeCursor();

        if($result){
            $game = new Game($this->getBdd()->lastInsertId(),$title,$nbPlayers);
            $this->addGame($game);
        }
    }
    
    public function getGameById($id){
        foreach($this->games as $game){
            if($game->getId() == $id){
                return $game;
            }
        }
    }

    public function editGameDB($id,$title,$nbPlayers){
        $req= "UPDATE games SET title = :title, nb_players = :nbPlayers WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id",$id,PDO::PARAM_INT);
        $statement->bindValue(":title",$title,PDO::PARAM_STR);
        $statement->bindValue(":nbPlayers",$nbPlayers,PDO::PARAM_INT);
        $result = $statement -> execute();
        $statement->closeCursor();


        if($result){
            $this->getGameById($id)->setTitle($title);
            $this->getGameById($id)->setNbPlayers($nbPlayers);
        }
    }

    public function deleteGameBD($id){
        $req = "DELETE FROM games WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id",$id,PDO::PARAM_INT);
        $result = $statement->execute();
        $statement->closeCursor();

        if($result){
            $game = $this->getGameByID($id);
            unset($game);
        }
    }

   

}

?>