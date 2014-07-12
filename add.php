<?php
	require_once('database.php');
	$query='SELECT *
			FROM categories
			ORDER BY categoryID';
	$categories=$db->query($query);



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Accessory Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  	<div class="row">
  		<div class="large-12 columns" id="random">
  			<h1>Add Product</h1>
  			<form action="add_product.php" method="post" id="add_product">
  				<label>Category: </label>
  				<select name="category_id">
  					<?php foreach ($categories as $category) : ?>
  						<option value="<?php echo $category['categoryID']; ?>">
  							<?php echo $category['categoryName']; ?>
  						</option>
  					<?php endforeach; ?>
  				</select>
  				<br />
          <label>Code: </label>
          <input type="text" name="code" />
          <br />
          <label>Name: </label>
          <input type="text" name="name" />
          <br />
          <label>List Price: </label>
          <input type="text" name="price" />
          <br />
          <label>&nbsp;</label>
          <input type="submit" value="Add Product" />
  			</form>
        <p><a href="product.php">View Product List</a></p>
  		</div>
  	</div>
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
 </html>



  			</form>
  		</div>
  	</div>

