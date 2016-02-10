<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalMilch" tabindex="-1" role="dialog" aria-labelledby="labelMilch">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelMilch">Milch und Laktose</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        <p>
          Butter, Käse, Margarine und Produkte, in denen Milch und /oder Laktose vorkommt.
        </p>

        <h4>Beispiele</h4>
        <p>
          Brot und Backwaren, Wurstwaren, Pürees, Suppen oder Saucen.
        </p>

        <?php include 'alerts/alternativen.php' ?>
        <p>
          Getreidemilch, Reismilch, Sojamilch, Reismilch, Mandelmilch, Haselnussmilch, Hanfmilch.
        </p>
      </div>
    </div>
  </div>
</div>
