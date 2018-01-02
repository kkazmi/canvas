<?php
// Fetching Values from URL.
$R=$_REQUEST;

$email = filter_var($R['email'], FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
if (filter_var($R['email'], FILTER_VALIDATE_EMAIL)) {
if (!preg_match("/^[0-9]{10}$/", $R['phone'])) {
echo "<span>* Please Fill Valid Contact No. *</span>";
} else {
    
$subject = $R['name'];
// To send HTML mail, the Content-type header must be set.
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $R['email']. "\r\n"; // Sender's Email
$headers .= 'Cc:' . $R['email']. "\r\n"; // Carbon copy to Sender
$template = '<div style="padding:50px; color:white;">Hello ' . $R['name'] . ',<br/>'
. '<br/>Thank you...! For Contacting Us.<br/><br/>'
. 'Name:' . $R['name'] . '<br/>'
. 'Email:' . $R['email'] . '<br/>'
. 'Contact No:' . $R['phone'] . '<br/>'
. 'Message:' . $R['message'] . '<br/><br/>'
. 'This is a Contact Confirmation mail.'
. '<br/>'
. 'We Will contact You as soon as possible .</div>';
$sendmessage = "<div style=\"background-color:#7E7E7E; color:white;\">" . $template . "</div>";
// Message lines should not exceed 70 characters (PHP rule), so wrap it.
$sendmessage = wordwrap($sendmessage, 70);
// Send mail by PHP Mail Function.
$send=mail("kazmikashif007@gmail.com", $subject, $sendmessage, $headers);
    if($send){
    header("Location:contact-us.php?msg=Your Query has been received, We will contact you soon.");
    }
    else{
        echo "error";
    }

}
} else {
echo "<span>* invalid email *</span>";
}
?>