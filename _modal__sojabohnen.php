<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalSojabohnen" tabindex="-1" role="dialog" aria-labelledby="labelSojabohnen">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelSojabohnen">Sojabohnen</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        <p>
          Sojabohnen und daraus gewonnene Erzeugnisse
        </p>

        <?php echo $vorsicht; ?>
        <p>
          Miso, Sojasauce, Sojaöl, Gebäck, Marinaden, Kaffeeweißer, Suppen, Saucen, Dressings.
        </p>
      </div>
    </div>
  </div>
</div>
