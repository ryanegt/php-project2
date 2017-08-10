<?php
error_reporting(E_ALL);

// $_POST['firstname']
// $_POST['lastname']
// $_POST['email']

//$newLine = $_POST['firstname'] . ", ";
//$newLine .= $_POST['lastname'] . ", ";
//$newLine .= $_POST['email'] ."\n";

// Put our form data into a string separated by commas
$newLine = implode(",",$_POST); 

// Open a handler to our file
$file = fopen("contact_history.txt","a");

// Write the string to our file
fwrite($file,$newLine);

// Close the file
fclose($file);

?>
Thanks for submitting your information. I'll look at it later...
<br><br>
<a href="form.php">Go back</a>