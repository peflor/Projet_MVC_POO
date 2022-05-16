<?php 
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http")."://".$_SERVER['HTTP_HOST']. $_SERVER['PHP_SELF']));


require_once "controller/GameController.php";
$gameController = new GameController;

if(empty($_GET['page'])){
    require_once "./view/home.view.php";
}else {
    $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);    
    switch($_GET['page']){
        case "accueil" : require_once "./view/home.view.php";
        break;
        case "games" : $gameController->displayGames();
        break;
    }
}

