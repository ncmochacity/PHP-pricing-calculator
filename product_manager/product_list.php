<?php include('../view/header.php'); ?>
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
    	<p class="action"><a href="?action=show_add_form">Add Product</a></p>

</div>
<?php include('../view/footer.php'); ?>
