<?php
if(isset($_POST['event_submit'])){
    $to = "info@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    
    $subject = "Event Registration";
	
    
    $message = $first_name . "  wrote the following:" . "\n\n"  ."Name : ". $first_name. "\n\n"   ."Email : ". $from. "\n\n" ;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $res = mail($to,$subject,$message,$headers);

	if(!empty($res)){
		header('Location:event-details.html?successeventreq=1');
	}
	else{
		header('Location:event-details.html?faileventreq=1');
	}

}
?>