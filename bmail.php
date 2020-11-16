<?php
$to = "mhkjayakumar@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$rtp=mail($to,$subject,$txt,$headers);
if($rtp==true){
    echo 'hiii';
}
else{
    echo 'byeee';
}
?> 