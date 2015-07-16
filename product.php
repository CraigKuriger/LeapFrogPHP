<?php include("include/products.php"); 

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	} 
}
if (!isset($product)) {
	header("Location: products.php");
	exit();
}

$section = "products";
$pageTitle = $product["name"];
include ("include/header.php");

?>
	<div class="container">
		<div class="row">
			<div class="breadcrumb"><a href="products.php">Frogs</a> &gt; <?php echo $product["name"]; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<span>
					<img class="product-image" src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
				</span>
			</div>
			<div class="col-md-6">
				<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
				<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
				<table>
					<tr>
						<th>
						<input type="hidden" name="on0" value="Colours">
						<label for="osO">Colours</label>
					</th>
					<td><select name="os0" id="os0">
						<?php foreach($product["colors"] as $color) { ?>
						<option value="<?php echo $color; ?>"><?php echo $color; ?> </option>
						<?php } ?>
					</select> </td></tr>
				</table>
				<input class="btn btn-success" type="submit" value="Add To Cart" name="submit" alt="PayPal - The safer, easier way to pay online!">
				</form>

				<p class="note-designer">All Items designed by Leapfrog</p>
			</div>
		</div>

<?php include ("include/footer.php"); ?>