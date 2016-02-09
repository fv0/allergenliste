<!DOCTYPE html>
<html>

  <?php include '_head.php'; ?>

  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="#">Häufige Fragen</a></li>
            <li role="presentation"><a href="#">Warum das Ganze?</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Allergenliste.de</h3>
      </div>

      <div class="jumbotron">
        <h1>„Das kapiert doch kein Mensch.”</h1>
        <p class="lead">
          Die EU-Allergenkennzeichnung in Ihrer Gastronomie umzusetzen ist nicht schwer.
        </p>
        <p class="lead">
          Verpflichtend seit <span id="dayCounterLMIV"></span>.
        </p>
      </div>

      <div class="row marketing">
        <h1>14 Hauptallergene</h1>
        <p>Alle Allergene verstehen sich einschließlich der daraus gewonnen Erzeugnissen.</p>

        <div class="col-lg-6">
          <h4>Glutenhaltiges Getreide</h4>
          <p>Weizen, Roggen, Gerste, Hafer, Dinkel, Kamut oder Hybridstämme davon</p>

          <h4>Krebstiere</h4>

          <h4>Eier</h4>

          <h4>Milch</h4>
          <p>
            Einschließlich Laktose.
          </p>

          <h4>Schalenfrüchte</h4>
          <p>
            Mandeln, Haselnüsse, Walnüsse, Kaschunüsse, Pecannüsse, Paranüsse, Pistazien, Macadamia- oder Queenslandnüsse
          </p>

          <h4>Sellerie</h4>

          <h4>Senf</h4>

          <h4>Sesamsamen</h4>

          <h4>Schwefeldioxid und Sulphite</h4>
          <p>
            In Konzentrationen von mehr als 10 mg pro Kilogramm oder Liter.
          </p>

          <h4>Lupinen</h4>

          <h4>Weichtiere</h4>
        </div>

        <div class="col-lg-6">
          <h4>Fische</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Erdnüsse</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Sojabohnen</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

      <div class="row marketing">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <p>Sie wollen es ganz genau wissen? Hier gibt es <a href="http://eur-lex.europa.eu/legal-content/DE/TXT/PDF/?uri=CELEX:02011R1169-20140219&from=EN" target="_blank">die EU-Verordnung im Detail</a> (PDF).</p>
        </div>
      </div>

      FAQ

      Was ist der Unterschied zwischen Allergenen und Zusatzstoffen?

      Gibt es absolute Allergenfreiheit?

      Was tun, wenn ich mir nicht sicher bin, ob ich ein allergenfreies Gericht anbieten kann?


      <footer class="footer">
        <p>
          Ich übernehme keine Haftung für die Aktualität der oben genannten Informtionen.
        </p>
      </footer>

    </div> <!-- /container -->

    <script>
      var startLMIV = new Date(2014, 12, 13);
      var now = new Date; // no arguments = current date

      // 24 hours, 60 minutes, 60 seconds, 1000 milliseconds
      var result = Math.round( (now - startLMIV) / (1000 * 60 * 60 * 24) ); // round the amount of days

      document.getElementById("dayCounterLMIV").innerHTML = result + " Tagen";
    </script>

  </body>
</html>
