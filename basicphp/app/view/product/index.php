<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php foreach($products as $product) { ?> 
		<?php $uns_p_category = unserialize($product['product_category']); ?>
		<?php $im_p_category = implode(",", $uns_p_category); ?>
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo "Product Name: " . $product['product_name']; ?></h2>	
				<p><?php echo "Product Quantity: " . $product['product_quantity']; ?></p>
				<p><?php echo "Product Category: " . $im_p_category; ?></p>
				<p><?php echo "Product Description: " . $product['product_description']; ?></p>
				<p><?php echo "Min Quantity: " . $product['min_quantity']; ?></p>
				<p><?php echo "Max Quantity: " . $product['max_quantity']; ?></p>
				<p><?php echo "Product Dept: " . $product['product_dept']; ?></p>
				<form method="post" action="http://wpa23.dev/product">
					<input name="product_id" value="<?php echo $product['id']; ?>" type="hidden"> </input>
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</div>
		</div>
		<?php } ?>
	</div>
</body>
</html>