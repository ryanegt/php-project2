<?php
error_reporting(E_ALL);

include("libraries/utilities.php");

// Call the function using arguments:
// arrayToFile($_POST,"contact_list.txt");
// echo __DIR__; 

arrayToFile($_POST,"my_info.txt");

?>
I added this to the file: <?php echo $addToFile;?> <br>
Thanks for submitting your information. I'll look at it later...

<br><br>
<a href="form.php">Go back</a>