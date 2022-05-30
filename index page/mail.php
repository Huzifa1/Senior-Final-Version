<?php 
if(isset($_POST['submit'])){
    $to ="timeoutprison@gmail.com" ; // this is our Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = $_POST['subject'];

    $message ="Name of the sender is: " . $_POST['name'] . "\nEmail of the sender is: " . $_POST['email'] . "\nPhone number of the sender is: " . $_POST['number']. "\nThe message is:\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
}
    header('Location: thank_you.html')
    
?>