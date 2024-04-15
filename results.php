<?php

  $usdAmount = $_POST['usdAmount'];
  $cadAmount = $usdAmount * 1.37; // 1 USD = 1.35 CAD
?>
<h3>Results:</h3>
The amount in CAD is <?php echo $cadAmount ?><br>


<?php 
 $usdAmount = $_POST['usdAmount'];
  $roublesAmount = $usdAmount * 92.90; // 1 USD = 75.50 Roubles
?>
<h3>Results:</h3>
The amount in Roubles is <?php echo $roublesAmount ?><br>

