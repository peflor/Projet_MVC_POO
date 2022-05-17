<?php

class GameUser {
    // private int $id;
    private string $nom;
    private string $prenom;
    private string $title;
    // private int $nbPlayers;
    // private int $users_id;

    public function __construct($nom,$prenom,$title){
        // $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->title = $title;
        // $this->nbPlayers = $nbPlayers;
        // $this->users_id = $users_id;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of nbPlayers
     */ 
    public function getNbPlayers()
    {
        return $this->nbPlayers;
    }

    /**
     * Set the value of nbPlayers
     *
     * @return  self
     */ 
    public function setNbPlayers($nbPlayers)
    {
        $this->nbPlayers = $nbPlayers;

        return $this;
    }

    /**
     * Get the value of users_id
     */ 
    public function getUsers_id()
    {
        return $this->users_id;
    }

    /**
     * Set the value of users_id
     *
     * @return  self
     */ 
    public function setUsers_id($users_id)
    {
        $this->users_id = $users_id;

        return $this;
    }
} 