<html>
	<head>
		<title>Contact</title>	
	</head>
	<body>
		<h1>Get In Touch!</h1>
		<p>Thanks for visiting my website! use the form below to send me a message.</p>
		
		<form method="POST" action="file_handler2.php">
			
			First name<br>
			<input type="text" name="firstname" value=""><br><br>
			Last name <br>
			<input type="text" name="lastname" value=""><br><br>
			Email Address <br>
			<input type="text" name="email" value=""><br><br>
			Your Message <br>
			<textarea name="message" style="width:300px;"></textarea><br><br>
			
			<input type="submit">
		</form>

		<div>
			Look at the file: <a href="contact_history.txt" target="_blank">here</a>.
			<br>here are the guests:<br>
			<?php

				$arr = file("contact_history.txt");
				foreach($arr as $line) {
					echo $line . "<br>";
				}
			?>
		</div>
	</body>
</html>