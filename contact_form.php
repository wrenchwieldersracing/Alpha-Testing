<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailfrom = $_POST['email'];
	$message = $_POST['message'];

	$mailto = "ayush.ram691@gmail.com";
	$headers = "From: ".$mailfrom;
	$txt = "Name: ".$name.".\n\n".$message;

	mail($mailto, "From WWR Website", $txt, $headers);
	header("Location: contact.html?mailsend");
}

?>