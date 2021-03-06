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
  		<h1>Break even calculator</h1>
  		<?php if(!empty($error_message)){
  			?>
  			<ul id="error"><li id="info"><?php echo $error_message; ?></li></ul>
  		<?php } ?>
  	</div>
  	<div class="row">
      <div class="large-12 columns" id="main">
        <p>Calculating break even units and sale dollars are essential for knowing when revenues and costs are equal
           Enter revenue, units sold, total variable and fixed costs to find the break even calculations done for you
        </p>
      </div>
    </div>
      <div id="content" class="clearfix">
      	<form action="display_results.php" method="post">
      		<label>Revenue</label>
      		<input type="text" name="saleprice" value="<?php echo $saleprice; ?>"/><br />
      		<label>Units sold</label>
      		<input type="text" name="units" value="<?php echo $units; ?>"/><br />
      		<label>Variable Costs</label>
      		<input type="text" name="variable" value="<?php echo $variable; ?>"/><br />
      		<label>Fixed Costs</label>
      		<input type="text" name="fixed" value="<?php echo $fixed; ?>"/><br />
      		<input type="submit" value="Calculate" id="submit-btn"/>
      	</form>
      </div>


  	<script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>