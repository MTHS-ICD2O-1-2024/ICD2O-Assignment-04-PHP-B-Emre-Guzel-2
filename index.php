<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Kebab Restaurant" />
  <meta name="keywords" content="math, icd2o" />
  <meta name="author" content="Emre Guzel" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>Kebab Restaurant</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="js/script.js"></script>

  <div class="container">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Welcome to Emre's Kebab House</span>
        </div>
      </header>

      <h3 class="number">Please choose a spice level between 1 and 5.</h3>

      <form action="answer.php" method="GET">
        <!-- Spice Level Input -->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="number" min="1" max="5" name="spice-level" required>
          <label class="mdl-textfield__label" for="spice-level">Spice Level</label>
          <span class="mdl-textfield__error">Input must be between 1 and 5!</span>
        </div>

        <!-- Food Type Dropdown -->
        <br><br>
        <div id="option" class="dropdown-container">
          <label class="select-day" for="kebab-type">Choose type of Turkish food:</label>
          <br><br>
          <select id="kebab-type" name="kebab-type" required>
            <option value="adana-kebab">Adana kebab</option>
            <option value="urfa-kebab">Urfa kebab</option>
            <option value="iskender-kebab">Iskender kebab</option>
            <option value="doner-kebab">Doner kebab</option>
            <option value="lahmajun">Lahmajun</option>
          </select>
        </div>

        <!-- Size Radio Buttons -->
        <br><br>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="size-large">
          <input type="radio" name="size" id="size-large" class="mdl-radio__button" value="large" checked>
          <span class="mdl-radio__label">Large</span>
          <p>$7.99</p>
        </label>

        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="size-medium">
          <input type="radio" name="size" id="size-medium" class="mdl-radio__button" value="medium">
          <span class="mdl-radio__label">Medium</span>
          <p>$5.99</p>
        </label>

        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="size-small">
          <input type="radio" name="size" id="size-small" class="mdl-radio__button" value="small">
          <span class="mdl-radio__label">Small</span>
          <p>$2.99</p>
        </label>

        <br><br><br>
        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
          Check price
        </button>
      </form>

      <div id="result"></div>
    </div>

    <div class="display-section">
  <img class="Calculate" src="images/kebab.jpg" alt="Kebab image">
  <div class="card">
    <h2>Menu</h2>
    <ul>
      <li>Adana kebab</li>
      <p>$30.99</p>
      <li>Urfa kebab </li>
      <p>$25.99</p>
      <li>Iskender Kebab</li>
      <p>35.99</p>
      <li>Doner kebab</li>
      <p>20.99</p>
      <li>Lahmajun</li>
      <p>$10.99</p>
    </ul>
    <ul>
      <h2>Sizes </h2>
      <li>Large (2 kG to 1.5 KG)</li>
      <li>Medium (1.2 KG to 1 KG)</li>
      <li>Small (1.2 KG to 500 G)</li>
    </ul>
  </div>
</div>
  <!-- Do NOT modify this section as requested -->


</body>

</html>