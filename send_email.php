<?php


	$to = "contact@elcharro.com"; 
	$from = $_REQUEST['email']; 
	$first_name = $_REQUEST['first_name']; 
	$last_name = $_REQUEST['last_name'];
	$headers = "From: $from"; 
	$subject = "You have a message sent from El Charro contact form"; 

	$fields = array(); 
	$fields{"first_name"} = "First name"; 
	$fiels{"last_name"} = "Last name";
	$fields{"email"} = "Email"; 
	$fields{"phone"} = "Phone"; 
	$fields{"message"} = "Message";

	$body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

	$send = mail($to, $subject, $body, $headers);

?>