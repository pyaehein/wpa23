<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
	<h2>Product List</h2>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover">
				    <thead>
				      	<tr>
					      	<th>Product Name</th>
					        <th>Product Quantity</th>
					        <th>Product Category</th>
					        <th>Product Description</th>
					        <th>Min Quantity</th>
					        <th>Max Quantity</th>
					        <th>Product Dept</th>
					        <th>Action</th>
				      	</tr>
				    </thead>
				    <tbody>
						<?php foreach($products as $product) { ?>
						<tr>
							<?php $uns_p_category = unserialize($product['product_category']); ?>
							<?php $im_p_category = implode(",", $uns_p_category); ?>
							<td><?php echo $product['product_name']; ?></td>
							<td><?php echo $product['product_quantity']; ?></td>
							<td><?php echo $im_p_category; ?></td>
							<td><?php echo $product['product_description']; ?></td>
							<td><?php echo $product['min_quantity']; ?></td>
							<td><?php echo $product['max_quantity']; ?></td>
							<td><?php echo $product['product_dept']; ?></td>
							<td>
								<form method="post" action="http://wpa23.dev/product">
									<input name="product_id" value="<?php echo $product['id']; ?>" type="hidden"> </input>
									<button type="submit" class="btn btn-danger">Delete</button>
								</form>
							</td>
				      	</tr>
				<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>