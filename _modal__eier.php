<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalEier" tabindex="-1" role="dialog" aria-labelledby="labelEier">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelEier">Eier</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        <p>
          Flüssigei, Lecithin, Albumin, Ovalbumin, …
        </p>

        <?php echo $vorsicht; ?>
        <p>
          Mayonnaise, Panaden, Dressings, Kuchen, Suppen, Saucen, Nudeln, Glasuren, …
        </p>

        <?php include 'alerts/alternativen.php' ?>
        <p>
          Kartoffelstärke, Sojamehl
        </p>
      </div>
    </div>
  </div>
</div>
