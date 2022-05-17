<?php ob_start();
require_once "modele/GameUserManager.php";
// $gameUserController = new GameUserController;
// $gameUserController->displayGamesUsers();
$test=new GameUserManager();
// $gamesUsers = $test->loadGamesUsers();
?>

<table class="table table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th>Titre</th>
            <th>Nom du joueur</th>
            <th>Prénom du joueur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($gamesUsers as $gameUser) : ?>
        <tr>
            <td><?= $gameUser?></td>
            <td><?= $gameUser?></td>
            <td><?= $gameUser?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php 
    $content= ob_get_clean();
    $title="Liste de jeux";
    require_once "base.html.php";

?>






