<?php 
// pretty url
// protect file browsing
// uri request
// redirect

function HomeController() {
	// db_get_all("products")
	$data = array(
		'title'		=> config_get("app.app_title"),
		'blogs'		=> db_get_all("blogs"),
	);

	echo load_view("blog.index", $data);
	
}

function BlogController($action = null) {
	if($action ==  null) {
		$data = array(
			'title'		=> config_get("app.app_title"),
			'blogs'		=> db_get_all("blogs"),
		);

		echo load_view("blog.index", $data);
	} else {
		if($action == 'create') {
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$title = htmlentities($_POST['title']);
				$body = $_POST['body'];
				$data = array(
					'title'	=> $title,
					'body'	=> $body
				);
    			db_insert("blogs", $data);


    			redirect("blog");
			}

			_blog_create();
		}
	}
	
}

function _blog_create() {
	echo load_view("blog.create");
}

function _product_createme() {
	echo load_view("product.createme");
}

function PageController() {
	echo load_view("page");
}

function ProductController($action = null) {
	if($action == null) {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$product_id = $_POST['product_id'];
			db_drop("products", $product_id);
		}
		$data = array(
				'title'		=> config_get("app.app_title"),
				'products'		=> db_get_all("products"),
		);

		echo load_view("product.index", $data);
	} else {
		if($action == 'create') {
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$product_name = $_POST['product_name'];
				$product_quantity = $_POST['product_quantity'];
				$product_category = explode(",", $_POST['product_category']);

				$s_p_category = serialize($product_category);
				var_dump($s_p_category);
				var_dump(unserialize($s_p_category));
			}

			$p_categroy = [
				'device', 'apple', 'orange'
			];

			$i_category = implode(",", $p_categroy);
			$data = [
				'category' => $i_category
			];

			echo load_view("product.create", $data);
		}

		if($action == 'createme') {
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$product_name = $_POST['product_name'];
				$product_quantity = $_POST['product_quantity'];
				$product_category = explode(",", $_POST['product_category']);
				$product_description = $_POST['product_description'];
				$min_quantity = $_POST['min_quantity'];
				$max_quantity = $_POST['max_quantity'];
				$product_dept = $_POST['product_dept'];

				$s_p_category = serialize($product_category);

				$data = array(
						'product_name'	=> $product_name,
						'product_quantity'	=> $product_quantity,
						'product_category' => $s_p_category,
						'product_description' => $product_description,
						'min_quantity' => $min_quantity,
						'max_quantity' => $max_quantity,
						'product_dept' => $product_dept
				);

			    db_insert("products", $data);

			   	redirect("product");
			}

			_product_createme();
		}
	}
	
}

?>
