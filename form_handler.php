<?php

/*
// Make sure a firstname is submitted
if($_POST['firstname'] == "") {
	echo "Please enter a firstname";
	die();
}

// Make sure last name is submitted
if($_POST['lastname'] == "") {
	echo "Please enter a lastname";
	die();
}

// Make sure last name is submitted
if($_POST['email'] == "") {
	echo "Please enter an email";
	die();
}
*/

foreach($_POST as $name => $value) {
	// could also be if(!$value) if(empty($value))
	if($value == "") {
		echo "please enter a value for ".$name;
		die();
	}
}

die();

$message  = "here is the message: " . $_POST['message'];
$message .= "\nhere is the email: " . $_POST['email'] ;
$message .= "\nmessage from: " . $_POST['firstname'] . " " . $_POST['lastname'];
$from     = $_POST['email'];

mail("ryanrodd@gmail.com","Message From Contact Form",$message,"From:".$from);

echo "here is the information you submitted:<br>";
print_r($_POST);

echo "<br>Thanks for entering a message, I'll get back to you shortly!";

?>