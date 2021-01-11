<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!-- Add your site or application content here -->
  <div class="wrapper">
    <h1>Eredivisie</h1>
    <p>Fair-play website</p>
    <p>De SPORT-bond ziet toe op een eerlijk verloop van de competitie. Onze topsporters dienen een voorbeeld te zijn
      voor de vele amateurs in de sport. Daarom streven we naar fair play; een sportieve omgang met elkaar. Daar hoort
      ook bij dat er weinig overtredingen plaatsvinden tijdens een wedstrijd. Op deze website geven we inzicht in het
      verloop van de competitie tot nu toe. U ziet de wedstrijden met de minste overtredingen, maar voor bewustwording
      brengen we ook de wedstrijden met de meeste overtredingen in beeld.</p>
    <div class="flex-container">
    <div class="box-half">
      <h2> Aantal overtredingen:</h2>
      <p>
        <?php
     $content = file_get_contents("files/sumovertreding.txt");
     echo($content)
    ?>
      </p>
    </div>
    <div class="box-half">
      <h2>Gemiddeld per wedstrijd:</h2>
      <p>

        <?php
     $content = file_get_contents("files/gemiddeld.txt");
     echo($content)
    ?>
      </p>
    </div>
    </div>
    <div class="box">
      <h2>Wedstrijden met de meeste overtredingen:</h2>
      <pre>
<?php
   $content = file_get_contents("files/zwartboek.txt");
   echo($content)
?>
</pre>
    </div>
    <div class="box">
      <h2>Wedstrijden met minder dan 2 overtredingen (laatste veertien dagen):</h2>
      <pre>
<?php
   $content = file_get_contents("files/eregalerij.txt");
   echo($content)
?>
</pre>
    </div>
    <footer>
      <p>Deze website is gemaakt in het kader van een praktijkopdracht bij de opleiding Software Developer, Curio Breda.
        <br>
        © Team X, Pietje Puk en Jan Smit.</p>
    </footer>
  </div>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->

</body>

</html>
