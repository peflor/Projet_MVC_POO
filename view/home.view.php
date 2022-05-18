<?php ob_start() ?>

<!-- <h2 class="bg-dark text-light text-center shadow p-2">Liste des jeux et joueurs</h2> -->
<!-- <table class="table table-hover text-center">
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
</table> -->

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class=" accordion-button bg-secondary text-light py-2 px-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Liste des joueurs et jeux
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
      <div class="accordion-body">
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
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>

<?php 
    $content= ob_get_clean();
    $title="Bienvenue sur Game-X";
    require_once "base.html.php";

?>









