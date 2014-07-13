<?php include '../view/header.php'; ?>
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
    		<ul class="nav">
    			<?php foreach ($products as $product) : ?>
    			<li>
    				<a href="?action=view_product&product_id=
    					<?php echo $product['productID']; ?>">
    					<?php echo $product['productName']; ?>
    				</a>
    			</li>
    			<?php endforeach; ?>
    		</ul>
    	</div>
</div>
<?php include '../view/footer.php'; ?>