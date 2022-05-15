<?php 
    require_once "Game.php";

    $game1 = new Game("1","Starcraft 2",8);
    $game2 = new Game("2","Among Us",10);
    $game3 = new Game("3","Valorant",10);

    require_once "GameManager.php";
    $gameManager = new GameManager;

    $gameManager->addGame($game1);
    $gameManager->addGame($game2);
    $gameManager->addGame($game3);

    $games = $gameManager -> getGames();

ob_start() ?>

<p>Games - Notre sélection</p>

<?php 
    $content= ob_get_clean();
    $title="Liste de jeux";
    require_once "base.html.php";

?>

<div class="container">
    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>Titre</th>
                <th>Nombre de joueurs</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($games as $game) : ?>
            <tr>
                <td><?= $game->getTitle()?></td>
                <td><?= $game->getnbPlayers()?></td>
                <td><a href=""><i class="fas fa-edit"></i></a></td>
                <td><a href=""><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<a href="" class="btn btn-success w-25 d-block m-auto">Ajouter un jeu</a>