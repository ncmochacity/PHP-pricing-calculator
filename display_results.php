<?php
	$revenue=$_POST['saleprice'];
	$units_sold=$_POST['units'];
	$variable_cost=$_POST['variable'];
	$fixed_cost=$_POST['fixed'];

	if(empty($revenue)){
		$error_message='Sale Price is a required field. ';
	}
	else if(!is_numeric($revenue)){
		$error_message="Sale Price must be a numeric value. ";

	}
	else if($revenue<=0){
		$error_message="Sale Price must be greater than 0. ";
	}
	else if(empty($units_sold)){
		$error_message="Units sold is a required field. ";
	}
	else if(!is_numeric($units_sold)){
		$error_message="Units sold must be a numeric value. ";
	}
	else if(empty($variable_cost)){
		$error_message="Units sold is a required field. ";
	}
	else if(!is_numeric($variable_cost)){
		$error_message="Units sold must be a numeric value. ";
	}
	else if(empty($fixed_cost)){
		$error_message="Units sold is a required field. ";
	}
	else if(!is_numeric($fixed_cost)){
		$error_message="Units sold must be a numeric value. ";
	}
	else{
		$error_message=" ";
	}
	if($error_message !=" "){
		include('calculator.php');
		exit();
	}
	//calculate
	$units_selling=$revenue/$units_sold;
	$units_variable=$variable_cost/$units_sold;
	$units_contribution=$units_selling-$units_variable;
	$break_even_units=$fixed_cost/$units_contribution.'units';
	$contribution_ratio=($units_contribution/$units_selling)* .01;
	$break_even_dollar=$fixed_cost/$contribution_ratio;

	$revenue_formatted='$' .number_format($revenue,2);
	$contribution_ratio_formatte=$contribution_ratio. '%';
	$units_contribution_formatted='$' .number_format($units_contribution,2);
	$break_even_dollar_formatted='$' .number_format($break_even_dollar,2);
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
  		<h1>Break even calculator</h1>
  		<?php if(!empty($error_message)){
  			?>
  			<p id="error"><?php echo $error_message; ?></p>
  		<?php } ?>
  	</div>
  	<div class="row">
      <div class="large-12 columns" id="main">
        <p>Calculating break even units and sale dollars are essential for knowing when revenues and costs are equal

        </p>
        <p>
        Proin vulputate fringilla bibendum. Nullam dictum sapien at velit euismod, quis iaculis lectus adipiscing. Nam ut tempor nibh, sed pretium neque. Maecenas adipiscing tellus sodales augue molestie facilisis. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Duis vehicula tempus mi ac bibendum. Etiam sed euismod nunc. Integer vitae tortor nulla. Suspendisse porta sollicitudin neque in porta.
        </p>
      </div>
    </div>
      <div id="content" class="clearfix">
      	<form action="display_results.php" method="post">
      		<label>Revenue: </label>
      		<span><?php echo $revenue_formatted; ?></span><br />
      		<label>Units sold: </label>
      		<span><?php echo $units_sold; ?></span><br />
      		<label>Variable Costs: </label>
      		<span><?php echo $variable_cost; ?></span><br />
      		<label>Fixed Costs: </label>
      		<span><?php echo $fixed_cost; ?></span><br />
      		<label>Units Selling Price: </label>
      		<span><?php echo $units_selling; ?></span><br />
      		<label>Units variable cost: </label>
      		<span><?php echo $units_variable; ?></span><br />
      		<label>Units Contribution Margin: </label>
      		<span><?php echo $units_contribution_formatted; ?></span><br />
      		<label>Break even sale units: </label>
      		<span><?php echo $break_even_units; ?></span><br />
      		<label>Contribution Margin Ratio: </label>
      		<span><?php echo $contribution_ratio_formatte; ?></span><br />
      		<label>Break even in sale dollars: </label>
      		<span><?php echo $break_even_dollar_formatted; ?></span><br />
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