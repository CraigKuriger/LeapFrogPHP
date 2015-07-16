<?php 

function get_list_view_html($product_id, $product){
	$output = "";
	$output = $output . '<div class="col-md-3 text-center">';
	$output = $output . '<h2 class="breadcrumb">' . $product["name"] . "</h2>";
	$output = $output . '<a href="product.php?id=' . $product_id .'">';
	$output = $output . '<img class="product-image" src="' . $product["img"] . '" alt="' . $product["name"] . '">';
	$output = $output . '<button class="btn btn-default">See More</button>';
	$output = $output . "</a>";
	$output = $output . "</div>";
	return $output;
}

$products = [];
	$products[101] = [
	"name" => "Cool Frog",
	"price" => "34.99",
	"img" => "img/frogdarkblue.png",
	"paypal" => "ED82P2VZG2PDU",
	"colors" => ["Dark Blue", "Light Blue", "Green", "Yellow", "Red", "Grey", "Purple", "Orange"]
	];
	$products[102] = [
	"name" => "Goon Frog",
	"price" => "24.99",
	"img" => "img/frogorange.png",
	"paypal" => "H45PSGQGYMYNL",
	"colors" => ["Dark Blue", "Light Blue", "Green", "Yellow", "Red", "Grey", "Purple", "Orange"]
	];
	$products[103] = [
	"name" => "Clown Frog",
	"price" => "29.99",
	"img" => "img/frogpurple.png",
	"paypal" => "W27PRZAKSLWJS",
	"colors" => ["Dark Blue", "Light Blue", "Green", "Yellow", "Red", "Grey", "Purple", "Orange"]
	];
	$products[104] = [
	"name" => "Gangster Frog",
	"price" => "24.99",
	"img" => "img/frogyellow.png",
	"paypal" => "67M23YV8WRVQN",
	"colors" => ["Dark Blue", "Light Blue", "Green", "Yellow", "Red", "Grey", "Purple", "Orange"]
	];
	$products[105] = [
	"name" => "OddBall Frog",
	"price" => "26.99",
	"img" => "img/froggrey.png",
	"paypal" => "H8JTQVD6UWQAQ",
	"colors" => ["Dark Blue", "Light Blue", "Green", "Yellow", "Red", "Grey", "Purple", "Orange"]
	];
	$products[106] = [
	"name" => "Another Frog",
	"price" => "34.99",
	"img" => "img/frogred.png",
	"paypal" => "DHYSV7F72AK5C",
	"colors" => ["Dark Blue", "Light Blue", "Green", "Yellow", "Red", "Grey", "Purple", "Orange"]
	];
	$products[107] = [
	"name" => "Leap Frog",
	"price" => "24.99",
	"img" => "img/froggreen.png",
	"paypal" => "D9HSAQPEBTJAG",
	"colors" => ["Dark Blue", "Light Blue", "Green", "Yellow", "Red", "Grey", "Purple", "Orange"]
	];
	$products[108] = [
	"name" => "Funny Frog",
	"price" => "39.99",
	"img" => "img/froglightblue.png",
	"paypal" => "4GV3FRJWNUVWN",
	"colors" => ["Dark Blue", "Light Blue", "Green", "Yellow", "Red", "Grey", "Purple", "Orange"]
	];


?>