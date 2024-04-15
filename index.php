<!DOCTYPE html>
<html>
  <head>
    <!-- styles sheet for MDL -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Meta Data -->
    <title>Calculating Currency Exchange in PHP</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (17)/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (17)/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (17)/favicon-16x16.png">
    <link rel="manifest" href="./favicon_io (17)/site.webmanifest">
  </head>
  <body>
    <?php
      echo "<h1>Calculating Currency Exchange in PHP</h1>";
      echo "<br>";
      echo "<p>Enter all values.</p>";
    ?>
    <form action="./results.php" method="post" target="calculation">
      <label for="lblUSD">Amount in USD:</label>
      <input type="number" id="usdAmount" placeholder="Enter the amount in USD" name="usdAmount"><br><br>

      <input type="submit" value="Calculate in CAD">
    </form> 
    <iframe id="calculation" name="calculation">			
   The area in CAD is  " + $cadArea + cm<sup>2</sup> <br>
     
    </iframe>
    
    <?php
      echo "<br>"
    ?>
    <form action="./results.php" method="post" target="results">
      <label for="lblUSD">Amount in USD:</label>
      <input type="number" id="usdAmount" placeholder="Enter the amount in USD" name="usdAmount"><br><br>

      <input type="submit" value="Calculate in Roubles">
    </form>

    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
     The area in Roubles is  " + $roublesArea + cm<sup>2</sup>
    </iframe>
    <center><img src="./images/Triangular Pyramid.jpg" alt="Formula 1 track" width="500" height="330"></center>
  </body>
</html>