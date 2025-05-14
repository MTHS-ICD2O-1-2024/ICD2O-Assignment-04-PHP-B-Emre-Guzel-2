<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content=" Looping numbers " />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Emre Guzel" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>Looping numbers </title>
</head>

<body>
  <div class="container-2">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Looping numbers </span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
        </div>
        <br><br>
        <?php
        $spiceLevel = $_GET["spice-level"];
        $kebabType = $_GET["kebab-type"];
        $size = $_GET["size"];  // Fixed
        $taxRate = 0.13;
        $spiceLevelExtra = 0;
        $kebabPrice = 0;
        $sizePrice = 0;

        // Show input values
        echo "<b>&nbsp; Spice level is : " . $spiceLevel . "</b><br>";
        // Convert kebab type to readable name
        $readableKebabType = ucwords(str_replace("-", " ", $kebabType));
        echo "<b>&nbsp; Kebab type is : " . $readableKebabType . "</b><br>";

        // Spice level logic
        if ($spiceLevel == 5) {
          $spiceLevelExtra = 3.00;
        } else if ($spiceLevel == 4 || $spiceLevel == 3) {
          $spiceLevelExtra = 2.00;
        } else if ($spiceLevel == 2 || $spiceLevel == 1) {
          $spiceLevelExtra = 0.50;
        }

        // Kebab prices
        if ($kebabType == "adana-kebab") {
          $kebabPrice = 30.99;
        } else if ($kebabType == "urfa-kebab") {
          $kebabPrice = 25.99;
        } else if ($kebabType == "iskender-kebab") {
          $kebabPrice = 35.99;
        } else if ($kebabType == "doner-kebab") {
          $kebabPrice = 20.99;
        } else if ($kebabType == "lahmajun") {
          $kebabPrice = 10.99;
        }

        // Size logic
        if ($size == "large") {
          $sizePrice = 7.99;
        } else if ($size == "medium") {
          $sizePrice = 5.99;
        } else if ($size == "small") {
          $sizePrice = 2.99;
        }

        // Calculations
        $subTotal  = $kebabPrice + $sizePrice + $spiceLevelExtra;
        $tax = $subTotal * $taxRate;
        $total = $subTotal + $tax;

        // Output
        echo "<b>&nbsp; Kebab price : $ " . round($kebabPrice, 2) . "</b><br>";
        echo "<b>&nbsp; Size price: $ " . round($sizePrice, 2) . "</b><br>";
        echo "<b>&nbsp; Spice Extra: $ " . round($spiceLevelExtra, 2) . "</b><br>";
        echo "<b>&nbsp; Tax (13%) : $ " . round($tax, 2) . "</b><br>";
        echo "<b>&nbsp; Total : $ " . round($total, 2) . "</b><br>";
        ?>

        <br /> <br>
        <div class="page-content-answer">
          &nbsp; <a href="./index.php">Return ...</a>
        </div>
        <br>
      </main>
    </div>

</body>

</html>