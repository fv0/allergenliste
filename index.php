<!DOCTYPE html>
<html>

  <?php include '_partial__head.php' ?>

  <body>
    <div class="container">
      <div class="header clearfix">
        <h3 class="logo">
          Allergenliste.de
        </h3>
      </div>

      <section class="well row">
        <div class="col-sm-5 col-xs-6 col-md-5">
          <img src="images/photodune-14407958-chef-s.jpg" alt="Skeptisch schauender Mann mit Kochmütze in klassischer Kochbekleidung" class="der-koch img-responsive">
        </div>
        <div class="der-koch__text col-sm-7 col-xs-12 col-md-7">
          <h2 id="textSample-1">„Das kapiert doch kein Mensch.”</h2>
          <p class="lead">
            Die EU-Allergenkennzeichnung in Ihrer Gastronomie umzusetzen ist nicht schwer.
          </p>
          <p class="lead">
            Verpflichtend seit bereits <em><span id="dayCounterLMIV"></span> Tagen</em>.
          </p>
        </div>
      </section>

      <div class="row marketing">
        <div class="col-md-12">
          <h2 style="margin-bottom: 30px;">14 Hauptallergene</h2>
        </div>

        <div class="col-sm-6">
          <div class="list-group">
            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalGluten">
              Glutenhaltiges Getreide
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalEier">
              Eier
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalMilch">
              Milch
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalSchalenfruechte">
              Schalenfrüchte
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalErdnuesse">
              Erdnüsse
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalSojabohnen">
              Soja
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalSellerie">
              Sellerie
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="list-group">
            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalSenf">
              Senf
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalFische">
              Fische
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalKrebstiere">
              Krebstiere
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalWeichtiere">
              Weichtiere
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalSesam">
              Sesam
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalSchwefel">
              Schwefeldioxid und Sulfite
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>

            <button type="button" class="list-group-item" data-toggle="modal" data-target="#modalLupinen">
              Lupinen
              <span class="glyphicon glyphicon-menu-right pull-right"></span>
            </button>
          </div>
        </div>

        <!-- Start Modal content -->
        <?php include '_modal__gluten.php' ?>
        <?php include '_modal__eier.php' ?>
        <?php include '_modal__milch.php' ?>
        <?php include '_modal__schalenfruechte.php' ?>
        <?php include '_modal__erdnuesse.php' ?>
        <?php include '_modal__sojabohnen.php' ?>
        <?php include '_modal__sellerie.php' ?>
        <?php include '_modal__senf.php' ?>
        <?php include '_modal__fische.php' ?>
        <?php include '_modal__krebstiere.php' ?>
        <?php include '_modal__weichtiere.php' ?>
        <?php include '_modal__sesam.php' ?>
        <?php include '_modal__schwefel.php' ?>
        <?php include '_modal__lupinen.php' ?>
        <!-- End Modal content -->
      </div>

      <?php include '_partial__footer.php' ?>

    </div> <!-- /container -->

    <?php include '_partial__scripts.php' ?>

  </body>
</html>
