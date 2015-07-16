<?php 

$pageTitle = "Welcome To Leapfrog";
include('include/header.php'); 

?>

	<div class="container">		
		<header>
			<a href="products.php">
				<img class="intro-image" src="img/froglong.jpg" alt="Leapfrog:">
			</a>
		</header>
		<hr>

		<div class="row">
				<?php include("include/products.php"); ?>
					<?php 
					$total_products = count($products);
					$position = 0;
					$list_view_html = "";
					foreach($products as $product_id => $product) {
						$position = $position + 1;
						if ($total_products - $position < 4) {
						$list_view_html = get_list_view_html($product_id, $product) . $list_view_html;
						}
					} 
					echo $list_view_html;
				?>								
		</div>

<?php include('include/footer.php'); ?>