<?php
if(isset($_POST['submit'])){
    $to = "info@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    
    $subject = "Mail from Yogalab";
	$Mobail = $_POST['phone'];
    
    $message = $first_name . "  wrote the following:" . "\n\n" ."Name : ". $first_name. "\n\n" ."Email : ". $from. "\n\n" ."Mobile : " .$Mobail. "\n\n" ."Message : " .$_POST['message'] ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $res = mail($to,$subject,$message,$headers);
	if(!empty($res)){
		header('Location:contact.html?success=1');
	}
	else{
		header('Location:contact.html?fail=1');
	}

}
?>