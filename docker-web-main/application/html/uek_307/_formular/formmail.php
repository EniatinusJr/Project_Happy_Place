<?php
if(!empty($_POST['semail'])){
$sender = $_POST['semail'];
$header = 'From:'. $sender . "\r\n";
}
if(!empty($_POST['remail'])){
$reciever = $_POST['remail'];
}
if(!empty($_POST['subject'])){
$subject = $_POST['subject'];
}
if(!empty($_POST['message'])){
$message = $_POST['message'];
}

mail($reciever,$subject,$message,$header);
echo "email sent: ";
echo $reciever . $subject . $message . $header;

?>