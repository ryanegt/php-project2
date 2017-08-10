<?php
error_reporting(E_ALL);

/**
 * arrayToFile uses an array of information and
 * concatenates it using commas, then adds it to
 * a file.
 */
function arrayToFile($arr,$filename) {
	global $addToFile;
	$addToFile = "SOMETHING ELSE";
	$newLine = implode(",",$arr);
	$handler = fopen($filename,"a");
	fwrite($handler,$newLine . "\n");
	fclose($handler);
}

?>