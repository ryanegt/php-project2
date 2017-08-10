<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT');
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

$postdata = file_get_contents("php://input");
$postarr  = json_decode($postdata,true);

$comment = trim(addslashes($postarr['comment']));
$author  = trim(addslashes($postarr['author']));
$date = date("Y-m-d H:i:s");


// Insert data into database
query("INSERT INTO comments2017 (`author`,`comment`,`date`)
	VALUES ('$author','$comment','$date');");
?>
