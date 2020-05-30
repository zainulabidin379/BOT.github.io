<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['message'];

		$to='ulabidinz1@gmail.com'; // Receiver Email ID
		$subject='Message From BOT';
		$message="Name: ".$name."\n"."Phone: ".$phone."\n"."Email: ".$email."\n"."Message: ".$msg;
		$headers="From: lyricshunt47@gmail.com";

		if(mail($to, $subject, $message, $headers)){
			echo '<script language="javascript">';
			echo 'alert("<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>")';
			echo '</script>';
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("Something went wrong! Please try again")';
			echo '</script>';
		}
	}
?>