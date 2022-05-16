<?php ob_start() ?>

<form method="POST" action="<?= URL ?>games/editvalid">
<div class="form-group">
    <label for="title">Titre du jeu</label>
    <input type="text" class="form-control" value="<?= $game->getTitle()?>" name="title" id="title">
</div>
<div class="form-group">
    <label for="nbPlayers">Nombre de joueurs</label>
    <input type="text" class="form-control" value="<?= $game->getNbPlayers()?>" name="nbPlayers" id="nbPlayers">
</div>
<input type="hidden" name="id-game" value="<?= $game->getId()?>">
<button type="submit" class="btn btn-primary">Modifier</button>
</form>


<?php 
    $content=ob_get_clean();
    $title="Edition de : ".$game->getTitle();
    require_once "base.html.php";

?>