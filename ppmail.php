<?php

$email="jayakumar.18bce7031@vitap.ac.in";
$subject = " Signup ";
$txt = "


hiiiii 


";
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$rtp=mail($email,$subject,$txt,$headers);
          if($rtp==true){
             $msg = "User Created ccccccSuccessfully, mail sent ";
          }
          else{
              $msg = "User , mail NOT sent error";
          }
          echo $msg;
          

          

?>


