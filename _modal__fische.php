<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalFische" tabindex="-1" role="dialog" aria-labelledby="labelFische">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelFische">Fische</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        <p>
          Süß- und Salzwasserfischarten, Kaviar, Fischextrakte
        </p>

        <?php echo $vorsicht; ?>
        <p>
          Würzpasten, Soßen (z.B. Worcestersauce), Surimi, Pasteten, Fonds, …
        </p>
      </div>
    </div>
  </div>
</div>
