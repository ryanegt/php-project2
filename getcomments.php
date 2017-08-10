<?php
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL);

define("DB_HOST", "localhost");
define("DB_USER", "ryan.rodd");
define("DB_PASS", "Circus123!");

// Run a query on the database and turn the result into
// a nice 2D array
function query($sql) {
	// Connect to the database
	$arr = [];
	$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,"react-backend");
	// Run a query on the database
	$result = mysqli_query($link,$sql);
	// Loop through the result and print everything
	if($result) {
		while($data = @mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$arr[] = $data;
		}
	}
	return $arr;
}

// Get data from database
$result = query("SELECT * FROM comments2017;");
echo json_encode($result);
?>
