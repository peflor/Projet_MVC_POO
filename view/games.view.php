<?php ob_start() ?>

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
            <td><a href="<?= URL ?>games/edit/<?= $game->getId() ?>"><i class="fas fa-edit"></i></a></td>
            <td>
                <form action="<?= URL ?>games/delete/<?= $game->getID() ?>" method="post" onSubmit=" return confirm('Êtes-vous certain de vouloir supprimer ce jeu ?')">
                    <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="<?= URL ?>games/add" class="btn btn-success w-25 d-block m-auto">Ajouter un jeu</a>

<?php 
    $content= ob_get_clean();
    $title="Liste de jeux";
    require_once "base.html.php";

?>






