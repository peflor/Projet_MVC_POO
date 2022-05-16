<?php 

abstract class Manager {

    private $bdd;

    private function setBdd(){
        $this->bdd = new PDO("mysql:host=localhost;dbname=game_x;charset=utf8","root","root");
        $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){

        if($this->setBdd() === null){
            $this->setBdd();
        }
        return $this->bdd;
    }
}





?>