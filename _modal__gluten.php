<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalGluten" tabindex="-1" role="dialog" aria-labelledby="labelGluten">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelGluten">Glutenhaltiges Getreide</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        <p>
          Weizen, Hafer, Roggen, Gerste, Dinkel, Kamut und daraus hergestellte Erzeugnisse.
        </p>

        <?php echo $vorsicht; ?>
        <p>
          Brot, Nudeln, Panaden, Soßen, Suppen, Wurstwaren, Desserts, Bier, …
        </p>

        <?php include 'alerts/alternativen.php'; ?>
        <p>
          Mais, Reis, Hirse, Soja, Amarant, Teff, Erdmandel, Esskastanie, Quinoa oder Buchweizen.
        </p>

        <h4>Label</h4>
        <img src="images/label__glutenfrei.jpg" alt="Siegel für glutenfreie Produkte">
      </div>
    </div>
  </div>
</div>
