<?php
	$product_description=$_POST['product'];
	$list_price=$_POST['price'];
	$discount_percent=$_POST['discount'];

	$discount=$list_price * $discount_percent* .01;
	$discount_price=$list_price - $discount;

	$list_price_formatted="$".number_format($list_price,2);
	$discount_percent_formatted=$discount_percent."%";
	$discount_formatted="$".number_format($discount,2);
	$discount_price_formatted="$".number_format($discount_price,2);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Foundation | Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  	<div class="row">
  		<div class="large-12 columns">
  			<h1>PHP Pricing Calculator</h1>
  		</div>
  	</div>
  	<div id="contact" class="clearfix">
  			<label>Product Description: </label>
  			<span><?php echo $product_description; ?></span><br>
  			<label>List Price: </label>
  			<span><?php echo $list_price_formatted; ?></span><br>
  			<label>Standard Discount: </label>
  			<span><?php echo $discount_percent_formatted; ?></span><br>
  			<label>Discount Amount: </label>
  			<span><?php echo $discount_formatted; ?></span><br>
  			<label>Discount Price: </label>
  			<span><?php echo $discount_price_formatted; ?></span><br>
  	</div>
  <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
 </html>