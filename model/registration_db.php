<?php
function add_registration($customerID, $product_code, $date) {
	global $db;
	$query = "INSERT INTO assign3_registrations
			  (customerID, productCode, registrationDate)
			  VALUES
			  ($customerID, '$product_code', '$date')";
	$db->exec($query);
}

function get_registrated_products_by_customer($customerID) {
	global $db;
	$query = "SELECT * FROM assign3_registrations
			  	INNER JOIN assign3_products
			  	ON assign3_registrations.productCode = assign3_products.productCode
			  WHERE customerID = $customerID";
	$products = $db->query($query);
	return $products;
}

?>