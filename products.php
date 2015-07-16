<?php include("include/products.php"); ?><?php
$pageTitle = "Leapfrog Catalogue";
$section = "products";

include('include/header.php'); ?>

<div class="container">

	<div class="row">
		<?php foreach($products as $product_id => $product) {
						echo get_list_view_html($product_id, $product);
				} ?>
	</div>
			
<?php include('include/footer.php'); ?>