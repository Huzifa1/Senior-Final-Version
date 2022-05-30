<?php 

    $to = $_GET['email']; // this is your Email address
    $from = "timeoutprison@gmail.com"; // this is the sender's Email address
    $subject = "Form submission";
    $message = $m;
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
   
   
?>

 