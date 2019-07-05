<?php
if(isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["mail"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$tomail ="shashank@techshock.tech";
	$headers= "From: ".$email;
	$txt ="email".$name.".\n\n"..$message;
	
  mail($tomail,$subject,$txt,$headers);
header("Location: index.php?mailsend");
}