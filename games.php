<?php ob_start() ?>

<p>Games - Notre sélection</p>

<?php 
    $content= ob_get_clean();
    $title="Liste de jeux";
    require_once "base.html.php"
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
            <tr>
                <td>Starcraft 2</td>
                <td>8</td>
                <td><a href=""><i class="fas fa-edit"></i></a></td>
                <td><a href=""><i class="fas fa-trash"></i></a></td>
            </tr>
            <tr>
                <td>Among Us</td>
                <td>10</td>
                <td><a href=""><i class="fas fa-edit"></i></a></td>
                <td><a href=""><i class="fas fa-trash"></i></a></td>
            </tr>
            <tr>
                <td>Valorant</td>
                <td>10</td>
                <td><a href=""><i class="fas fa-edit"></i></a></td>
                <td><a href=""><i class="fas fa-trash"></i></a></td>
            </tr>
        </tbody>
    </table>
</div>

<a href="" class="btn btn-success w-25 d-block m-auto">Ajouter un jeu</a>