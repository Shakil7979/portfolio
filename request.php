<?php 
 
if(isset($_REQUEST['n']))
{
  $user_name = $_REQUEST['n'];
  $user_email = $_REQUEST['e']; 
  $user_subject = $_REQUEST['s'];
  $user_message = $_REQUEST['m'];

  $subject = "Message From Portfolio";
  $to ="shakilcoding@gmail.com";

  $massege = "Name: ".$user_name."<br>"."\r\n";
  $massege .= "Email: ".$user_email."<br>"."\r\n"; 
  $massege .= "Subject: ".$user_subject."<br>"."\r\n"; 
  $massege .= "messsage: ".$user_message."<br>"."\r\n"; 

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: oubs@coderit.fun"."\r\n" ;

  $mail = mail($to,$subject,$massege,$headers);
 
  if($mail == true){
    echo "success";
  }
  else{
    echo "error";
  }
 
}

