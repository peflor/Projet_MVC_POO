<?php ob_start() ?>

<form method="POST" action="<?= URL ?>users/uvalid">
<div class="form-group">
    <label for="nom">Nom de l'utilisateur</label>
    <input type="text" class="form-control" name="nom" id="nom">
</div>
<div class="form-group">
    <label for="prenom">Prénom de l'utilisateur</label>
    <input type="text" class="form-control" name="prenom" id="prenom">
</div>
<button type="submit" class="btn btn-primary">Ajouter</button>
</form>


<?php 
    $content=ob_get_clean();
    $title="Ajouter un utilisateur";
    require_once "base.html.php";

?>