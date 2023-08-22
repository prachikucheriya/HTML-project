<?php
if(isset($_POST['submitnewsletter'])){
    $to = "info@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "subscription";
    $message = "Subscription email : ".$from ; 
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $res = mail($to,$subject,$message,$headers);

	if(!empty($res)){
		header('Location:index.html?successreq=1');
	}
	else{
		header('Location:index.html?failreq=1');
	}

}
?>