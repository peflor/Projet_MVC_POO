<?php ob_start();
require_once "controller/GameController.php";
$gameController = new GameController;
?>

<h2 class="text-center bg-secondary text-light shadow p-2 mt-5">listes des joueurs ayant un jeu</h2>
<table class="table table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th>Titre</th>
            <th>Nom du joueur</th>
            <th>Prenom du joueur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($gamesUsers as $gameUser) : ?>
        <tr>
            <td><?= $gameUser->getTitle()?></td>
            <td><?= $gameUser->getNom()?></td>
            <td><?= $gameUser->getPrenom()?></td>            
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="row flex-lg-row flex-xl-row flex-column">
    
<div class="col-4">
    <div class="card text-white bg-secondary mb-3 shadow" style="max-width: 20rem;">
    <div class="card-header text-center">Nombre de joueurs ayant un jeu</div>
    <div class="card-body">
        <h4 class="card-title text-center"><?= count($gamesUsers) ?></h4>
    </div>
    </div>
</div>
<div class="col-4">
    <div class="card text-white bg-secondary mb-3 shadow" style="max-width: 20rem;">
    <div class="card-header text-center">Nombre de jeux disponibles</div>
    <div class="card-body">
        <h4 class="card-title text-center"><?php $gameController->countGames()?></h4>
    </div>
    </div>
</div>
<!-- <div class="col-4">
    <div class="card text-white bg-secondary mb-3 shadow" style="max-width: 20rem;">
    <div class="card-header text-center">Nombre d'associations</div>
    <div class="card-body">
        <h4 class="card-title text-center"><?= count($gamesUsers) ?></h4>
    </div>
    </div>
</div> -->




<?php 
    $content= ob_get_clean();
    $title="Bienvenue sur Game-X";
    require_once "base.html.php";

?>









