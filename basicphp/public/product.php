<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Product</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- jQuery UI CSS -->
	<link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">

	<!-- Bootstrap styling for Typeahead -->
	<link href="http://wpa23.dev/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
	<!-- Tokenfield CSS -->
	<link href="http://wpa23.dev/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script type="text/javascript" src="http://wpa23.dev/js/bootstrap-tokenfield.min.js" charset="UTF-8"></script>
	
	<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
</head>
<body>
<div class="prod">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-center">Product Entry Form</h2>
		</div>
	</div>
	<div class="row">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Product Name</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Product Name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Product Quality</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Product Quality">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Product Category</label>
				<div class="col-sm-9">
					<input type="text" id="product_category" class="form-control">
				</div>
			</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Product Description</label>
					<div class="col-sm-9">
					<textarea class="form-control" rows="14"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Min Quantity</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Min Quantity">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Max Quantity</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Max Quantity">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Product Dept.</label>
				<div class="col-sm-9">
					<select class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="text" class="btn btn-default">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>
	</div>
	<script>
		$(document).ready(function(){
			$("#product_category").tokenfield();
		});
	</script>
</body>
</html>