<?php ob_start() ?>

<form method="POST" action="<?= URL ?>users/editvalid">
<div class="form-group">
    <label for="nom">Nom de l'utilisateur</label>
    <input type="text" class="form-control" value="<?= $user->getFullname()?>" name="nom" id="nom">
</div>
<div class="form-group">
    <label for="prenom">Prénom de l'utilisateur</label>
    <input type="text" class="form-control" value="<?= $user->getName()?>" name="prenom" id="prenom">
</div>
<input type="hidden" name="id-user" value="<?= $user->getId()?>">
<button type="submit" class="btn btn-primary">Modifier</button>
</form>


<?php 
    $content=ob_get_clean();
    $title="Edition de : ".$user->getFullname()." ".$user->getName();
    require_once "base.html.php";

?>