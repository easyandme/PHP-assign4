<?php
function get_countries() {
	global $db;
	$query = "SELECT * FROM assign3_countries
			  ORDER BY countryName";
	$countries = $db->query($query);
	return $countries;
}

?>