<?php
$to = "mhkjayakumar@gmail.com,akeshav53@gmail.com";
$subject = "My subject";
$txt = "Hello world! life";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$rtp=mail($to,$subject,$txt,$headers);
if($rtp==true){
    echo 'hiii done';
}
else{
    echo 'byeee';
}
?> 
