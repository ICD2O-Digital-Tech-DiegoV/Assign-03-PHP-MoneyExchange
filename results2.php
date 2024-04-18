<?php 
 $usdAmount = $_POST['usdAmount'];
  $roublesAmount = $usdAmount * 92.90; // 1 USD = 75.50 Roubles
?>
<h3>Results:</h3>
The amount in Roubles is <?php echo $roublesAmount ?><br>
