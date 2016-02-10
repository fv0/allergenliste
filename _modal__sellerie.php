<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalSellerie" tabindex="-1" role="dialog" aria-labelledby="labelSellerie">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelSellerie">Sellerie</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        Sellerieknolle als auch die Staude.

        <?php echo $vorsicht; ?>
        Gewürz in Fertiggerichten, Dressings, Ketchup, Saucen, …

        <?php include 'alerts/alternativen.php'; ?>
        <p>
          Petersilienwurz, Liebstöckel
        </p>
      </div>
    </div>
  </div>
</div>
