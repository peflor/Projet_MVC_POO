<?php ob_start() ?>

<p>Games - Notre sélection</p>

<?php 
    $content= ob_get_clean();
    $title="Liste de jeux";
    require_once "base.html.php"
?>