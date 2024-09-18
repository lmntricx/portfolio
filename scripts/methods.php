<?php

function sendmail($addr,$phone,$name,$msg){
    $to = "oasis@finitegames.co.za";
    $subject = "Web dev portfolio - ".$name;
    $headers = "From:".$addr." \r\n";
	$headers .= "Cc:".$addr." \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html \r\n";
  
	$msg .= "<br/><br/>";
	$msg .= "Phone :".$phone;

    $results = mail($to,$subject,$msg,$headers);

    return $results;
}

#Little logic
#Little logic

$curr_time = date("H:i:s");

$mail = False;
$mail_error = "";

if(isset($_POST['mail']) AND isset($_POST['entity']) AND isset($_POST['message'])){
	$addr = $_POST['mail'];
	$phone = $_POST['phone'];
	$name = $_POST['entity'];
	$text = $_POST['message'];

    if($addr == 'oasis@finitegames.co.za' OR empty($addr) OR $addr == NULL){
        $mail_error = "Please enter a valid email adress";
    }elseif(count_chars($phone) < 9){
        $mail_error = "Please use a valid phone number";
    }elseif(empty($name)){
        $mail_error = "Please Provide your name or your company name";
    }elseif(empty($text) OR count_chars($text) < 10){
        $mail_error = "Please briefly outline your request in the message box";
    }else{
        $mail = sendmail($addr,$phone,$name,$text);
    }
	
}

?>
