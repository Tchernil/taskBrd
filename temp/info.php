<?php
/*
	It is test code....
*/

	$var = $_POST[ "info"];
	foreach( $var as $key=>$value ) {
		echo $value;
	}


?>


<form action = "info.php" method = "POST">
	<p>Who are you:</p>
		<ul>
			<li>
				<label for = "org">
					Org.
					<input type = "checkbox" id = "org" value = "org" name = "info[]">
				</label>
			</li>
			<li>
				<label for = "anonim">
					Anonim
					<input type = "checkbox" id = "anonim" value = "anonim" name = "info[]"> 
				</label>
			</li>
			<li>
				<label for = "freelancer">
					Freelancer
					<input type = "checkbox" id = "freelancer" value = "freelancer" name = "info[]">
				</label>
			</li>
		</ul>
	<input type = "submit" value = "send info">
</form>