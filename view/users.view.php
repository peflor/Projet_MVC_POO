<?php ob_start() ?>

<table class="table table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user->getFullname()?></td>
            <td><?= $user->getName()?></td>
            <td><a href="<?= URL ?>users/edit/<?= $user->getId() ?>"><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="<?= URL ?>users/add" class="btn btn-success w-25 d-block m-auto">Ajouter un utilisateur</a>

<?php 
    $content= ob_get_clean();
    $title="Liste des utilisateurs";
    require_once "base.html.php";

?>

