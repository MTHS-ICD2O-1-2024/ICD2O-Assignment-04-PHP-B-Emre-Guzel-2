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
        // Setting the varabiles 
        $firstNum = $_GET["first-num"];
        $secondNum = $_GET["second-num"];
        $result = 0;
        $count = 0;
        $negativeResult = false;
        $additionText = "";

        // Show input values
        echo "<b>" . "First number: " . $firstNum . "<br>" . "</b>";
        echo  "<b>" . "Second number: " . $secondNum . "<br>" . "</b>";

        // Check if the result should be negative
        if (($firstNum < 0 && $secondNum > 0) || ($firstNum > 0 && $secondNum < 0)) {
          $negativeResult = true;
        }

        // Convert both numbers to positive
        if ($firstNum < 0) {
          $firstNum = -$firstNum;
        }
        if ($secondNum < 0) {
          $secondNum = -$secondNum;
        }

        // Multiply using repeated addition
        while ($count < $secondNum) {
          $result += $firstNum;
          $additionText .= $firstNum;

          if ($count < $secondNum - 1) {
            $additionText .= " + ";
          }

          $count++;
        }

        // Apply negative sign after the loop
        if ($negativeResult) {
          $result = -$result;
        }

        // Show the full equation and result
        echo " <b> Result is " . $additionText . " = " . $result . "</b>";
        ?>
        <br /> <br>
        <div class="page-content-answer">
          <a href="./index.php">Return ...</a>
        </div>
        <br>
      </main>
    </div>

</body>

</html>