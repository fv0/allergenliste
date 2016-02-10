<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalSchwefel" tabindex="-1" role="dialog" aria-labelledby="labelSchwefel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelSchwefel">Schwefel</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        <p>
          Softdrinks, Bier, Wein, Essig, Trockenfrüchte.
        </p>

        <?php echo $vorsicht; ?>
        <p>
          Konzentrationen von mehr als 10 mg/Kg oder 10 mg/l.
        </p>
      </div>
    </div>
  </div>
</div>
