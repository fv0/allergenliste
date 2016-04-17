<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalWeichtiere" tabindex="-1" role="dialog" aria-labelledby="labelWeichtiere">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelWeichtiere">Weichtiere</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        <p>
          Schnecken, Tintenfisch, Oktopus, Abalone, Calamares, Austern, Muscheln und alle Erzeugnisse aus ihnen.
        </p>

        <?php echo $vorsicht; ?>
        <p>
          Gewürzmischungen, Soßen, asiatische Spezialitäten, Paella, Marinaden, …
        </p>
      </div>
    </div>
  </div>
</div>
