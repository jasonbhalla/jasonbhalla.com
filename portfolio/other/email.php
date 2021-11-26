<?php

$con = mysqli_connect("localhost", "root", "", "portfolio");

if(mysqli_connect_errno()) {
	echo "Failed To Connect: " . mysqli_connect_errno();
}

// the message

if(isset($_POST['submitButton'])) {
	$name = strip_tags($_POST["name"]);
	$email = strip_tags($_POST["email"]);
	$phone = strip_tags($_POST["phone"]);
	$message = strip_tags($_POST["message"]);
	$message = strip_tags(wordwrap($message,70));
	$result = 'Portfolio Message' . '\n' . 'Name: ' . $name . '\n' . 'Email: ' . $email . '\n' . 'Phone: ' . $phone . '\n' . 'Message: ' . $message;
	$date = date("Y-m-d");

	
}

// use wordwrap() if lines are longer than 70 characters


// send email
echo $result;
$query = mysqli_query($con, "INSERT INTO messages VALUES (NULL, '$name', '$email', '$phone', '$message', '$date')");
mail("jasonhalla.com@gmail.com", "Portfolio Message", $message);
?>