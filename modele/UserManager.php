<?php
require_once "Manager.php";
require_once "user.php";

class UserManager extends Manager{

    private $users;

    public function addUser($user){
        $this->users[] = $user;
    }

    public function getUsers(){
        return $this->users;
    }

    public function loadUsers(){
        $req = $this->getBdd()->prepare("SELECT * FROM users");
        $req->execute();
        $myUsers = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myUsers as $user){
            $u = new User($user['id'], $user['nom'], $user['prenom']);
            $this->addUser($u);
        }
    }

    public function newUserDB($nom,$prenom){
        $req = "INSERT INTO users (nom, prenom)
                Values (:nom, :prenom)";
        $statement = $this->getBdd()->prepare($req);
        $statement ->bindValue(":nom",$nom, PDO::PARAM_STR);
        $statement->bindValue(":prenom",$prenom, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if($result){
            $user = new User($this->getBdd()->lastInsertId(),$nom,$prenom);
            $this->addUser($user);
        }
    }

    public function getUserById($id){
        foreach($this->users as $user){
            if($user->getId() == $id){
                return $user;
            }
        }
    }

    public function editUserDB($id,$nom,$prenom){
        $req= "UPDATE users SET nom = :nom, prenom = :prenom WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id",$id,PDO::PARAM_INT);
        $statement->bindValue(":nom",$nom,PDO::PARAM_STR);
        $statement->bindValue(":prenom",$prenom,PDO::PARAM_STR);
        $result = $statement -> execute();
        $statement->closeCursor();


        if($result){
            $this->getUserById($id)->setFullname($nom);
            $this->getUserById($id)->setName($prenom);
        }
    }
  
}

?>