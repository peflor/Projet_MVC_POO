<?php 
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http")."://".$_SERVER['HTTP_HOST']. $_SERVER['PHP_SELF']));


require_once "controller/GameController.php";
$gameController = new GameController;

require_once "controller/UserController.php";
$userController = new UserController;

if(empty($_GET['page'])){
    require_once "./view/home.view.php";
}else {
    $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
    // var_dump($url[1]);    
    switch($url[0]){
        case "accueil" : require_once "./view/home.view.php";
        break;
        case "games" :
            if(empty($url[1])){
                $gameController->displayGames();
            } else if($url[1] === "add"){
                echo "créer un jeu";
            } else if($url[1] === "edit"){
                echo "modifier un jeu";
            } else if($url[1] === "delete"){
                echo "supprimer un jeu";
            }
        break;
        case "users" : 
            if(empty($url[1])){
                $userController->displayUsers();
            } else if($url[1] === "add"){
                echo "créer un utilisateur";
            } else if($url[1] === "edit"){
                echo "modifier un utilisateur";
            } else if($url[1] === "delete"){
                echo "supprimer un utilisateur";
            }
        break;
    }
}

