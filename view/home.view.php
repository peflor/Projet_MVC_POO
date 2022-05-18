<?php ob_start() ?>

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

<?php 
    $content= ob_get_clean();
    $title="Liste de jeux & joueurs";
    require_once "base.html.php";

?>









