<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalMilch" tabindex="-1" role="dialog" aria-labelledby="labelMilch">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelMilch">Milch und Laktose</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorsicht; ?>
        <p>
          Brot und Backwaren, Wurstwaren, Pürees, Suppen, Pommes Frites, Kroketten, Karamell, Gratin, …
        </p>

        <?php include 'alerts/alternativen.php' ?>
        <p>
          Getreidemilch, Reismilch, Sojamilch, Mandelmilch, Haselnussmilch, Hanfmilch.
        </p>
      </div>
    </div>
  </div>
</div>
