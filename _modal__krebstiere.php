<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalKrebstiere" tabindex="-1" role="dialog" aria-labelledby="labelKrebstiere">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelKrebstiere">Krebstiere</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        <p>
          Garnelen, Hummer, Krebse, Scampi, Shrimps, Langusten und alle daraus gewonnenen Erzeugnisse.
        </p>

        <?php echo $vorsicht; ?>
        <p>
          Asiatischen Gewürzmischung oder Pasten mit Extrakten aus Krebstieren.
        </p>
      </div>
    </div>
  </div>
</div>
