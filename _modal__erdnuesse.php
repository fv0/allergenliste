<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalErdnuesse" tabindex="-1" role="dialog" aria-labelledby="labelErdnuesse">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelErdnuesse">Erdnüsse</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorsicht; ?>
        <p>
          Gebäck und Kuchen, Desserts, Cerealien, Schokolade, Müsli, Satésoße, vorfrittierte Produkte (Pommes Frites, Rösti, Kartoffelpuffer, etc.), Aufstriche, …
        </p>

        <?php include 'alerts/alternativen.php'; ?>
        <p>
          Sesam, Sonnenblumenkerne oder Kürbiskerne.
        </p>
      </div>
    </div>
  </div>
</div>
