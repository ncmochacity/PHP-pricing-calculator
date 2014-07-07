<?php
	require 'database.php';
	//get category id
	
	if(!isset($category_id)){
		$category_id=$_GET['category_id'];
		if(!isset($category_id)){
			$category_id=1;

		}
	}

	$query="Select * From categories
			Where categoryID=$category_id";
	$category=$db->query($query);
	
	$category=$category->fetch();
	$query='Select * From categories 
			Order By categoryID';
	$categories=$db->query($query);
	$query="Select * From products
			Where categoryID=$category_id
			Order By productID";
	$products=$db->query($query);

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
  	<div class="row" >
      <div class="large-7 columns" id="random">
        <h1>Product List</h1>
        
      </div>
      <div class="large-5 columns" id="sidebar">
      	<h1>Categories</h1>
      	<ul>
      		<?php foreach ($categories  as $category) : ?>
      		<li>
      			<a href="?category_id=<?php echo $category['categoryID']; ?>">
      				<?php echo $category['categoryName']; ?>
      			</a>
      		</li>
      	<?php endforeach; ?>
      	</ul>
      </div>
    </div>
    <div class="row">
    	<div class="large-12 columns">
    		<h2><?php echo $category_name; ?></h2>
    		<table>
    			<thead>
    				<tr>
    					<th>Code</th>
    					<th>Name</th>
    					<th>Price</th>
    				</tr>
    				<?php foreach ($products as $product) : ?>
    				<tr>
    					<td><?php echo $product['productCode']; ?></td>
    					<td><?php echo $product['productName']; ?></td>
    					<td><?php echo $product['listPrice']; ?></td>
    					<td><form action="delete_product.php" method="post" id="delete_form">
    						<input type="hidden" name="product_id" 
    							value="<?php echo $product['productID']; ?>"/>
    						<input type="hidden" name="category_id"
    							value="<?php echo $product['categoryID']; ?>"/>
    						<input type="submit" value="Delete" />
    						</form>
    					</td>
    				</tr>
    			</thead>
    		<?php endforeach; ?>
    		</table>
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





