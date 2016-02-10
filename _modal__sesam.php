<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalSesam" tabindex="-1" role="dialog" aria-labelledby="labelSesam">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelSesam">Sesam</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        <p>
          Sesam im Rohzustand, als Sesamöl oder Sesampaste
        </p>

        <?php echo $vorsicht; ?>
        <p>
          Gebäck, Marinaden, Dressings, Falafel, Cerealien, Hummus, …
        </p>
      </div>
    </div>
  </div>
</div>
