<?php include 'titles/titles.php'; ?>

<div class="modal fade" id="modalSchalenfruechte" tabindex="-1" role="dialog" aria-labelledby="labelSchalenfruechte">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title" id="labelSchalenfruechte">Schalenfrüchte</h4>
      </div>
      <div class="modal-body">
        <?php echo $vorkommen; ?>
        <p>
          Mandeln, Haselnüsse, Walnüsse, Kaschunüsse/Cashewnüsse, Pekannüsse, Paranüsse, Pistazien, Macadamia-/Queenslandnüsse sowie alle daraus gewonnenen Erzeugnisse.
        </p>

        <?php echo $vorsicht; ?>
        <p>
          Pesto, Gebäck, Mortadella (enthält Pistazien), Süßspeisen, Schokolade, Cremespeisen, Marzipan, Wurstwaren, Pasteten, vegetarische Aufstriche, Müsli, …
        </p>
      </div>
    </div>
  </div>
</div>
