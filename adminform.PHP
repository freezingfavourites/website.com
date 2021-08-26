<?php
	if(isset($_POST['submit'])){
		$name=$_POST['fullname'];
    $foodtype=$_POST['foodname']
		$phone=$_POST['phone'];
		$dishes=$_POST['food']
    $address=$_POST['address']

		$to='umairahmed486950@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."food :".$foodtype."\n"."Phone :".$phone."\n"."dish :".$dishes."\n"."Wrote the following :"."\n\n".$address;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>