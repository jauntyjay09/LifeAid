<?php
$to = "mhkjayakumar@gmail.com";
$subject = "My subject";
$txt = "Hello aws world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$rtp=mail($to,$subject,$txt,$headers);
if($rtp==false){
    echo 'hiii';
}
else{
    echo 'byeee';
}
?> 
