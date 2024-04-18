<!DOCTYPE html>
<html>
  <head>
    <!-- styles sheet for MDL -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Meta Data -->
    <title>Calculating Currency Exchange in PHP</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (21)/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (21)/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (21)/favicon-16x16.png">
    <link rel="manifest" href="./favicon_io (21)/site.webmanifest">\

    <!-- MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>
  <body>
    
    <?php
      echo "<h1>Calculating Currency Exchange in PHP</h1>";
      echo "<br>";
      echo "<p> Pleas enter all values.</p>";
    ?>
    <form action="./results.php" method="post" target="calculation">
      <label for="lblUSD">Amount in USD:</label>
      <input type="number" id="usdAmount" placeholder="Enter the amount in USD" name="usdAmount"><br><br>

      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Calculate in CAD">Calculate in CAD</button>
    </form> 
    <iframe id="calculation" name="calculation">			
   The area in CAD is  " + $cadArea + cm<sup>2</sup> <br>
     
    </iframe>
    
    <?php
      echo "<br>"
    ?>
    <form action="./results2.php" method="post" target="results">
      <label for="lblUSD">Amount in USD:</label>
      <input type="number" id="usdAmount" placeholder="Enter the amount in USD" name="usdAmount"><br><br>

      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Calculate in Roubles">Calculate in Roubles</button>
    </form>

    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
     The area in Roubles is  " + $roublesArea + cm<sup>2</sup>
    </iframe>
    <img src="./images/MoneyImage!.jpg" alt="Image" width="500" height="330">
  </body>
</html>