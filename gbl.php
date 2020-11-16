<?php
$emaily="jayakumar2001mhk@gmail.com";
 $subject = "Your Payment is Successful";
    $msg= "

    <!DOCTYPE html>
    <html lang='en' dir='ltr'>
      <head>
        <meta charset='utf-8'>
        <title></title>
        <style>
        @media print {
          .print_hidden{display: none;}
        }
          table{width: 600px; border: solid 1px; padding: 24px;margin: auto;}
          .bottom_solid{border-top: solid 1px; height: 30px}
          .right{text-align: right;}
          .dashed_bottom{border-bottom: dashed 1px;}
        </style>
      </head>
      <body>
      
    <div class='print_hidden'>

        
      <h4> Dear <b>jj</b>, </h4>
<p>This is an acknowledgement mail from Protrainy that your application form with Enrolment no. <b>kk</b> and Successful Order ID <b>hhh</b> for the IndustryReady Master Class July 2020 has been Successfully Completed and Submitted .
Please keep this receipt for future reference.
</p>
<p>
You have successfully registered for these master classes:
<b> hh </b> 
</p>

<p>
The master Class is scheduled from July 19,2020 onwards and will be conducted through live video conferencing applications (Details will be sent to you in subsequent mails). The individual session expert's details will be mailed individually to you 2 days before your session scheduled date.
</p>
<p> PLEASE FIND YOUR SESSION SCHEDULED DATES HERE : <a href='https://protrainy.com/masterclass/Schedule_MasterClass.jpg'>CLICK TO VIEW</a></P>

<p>
Your referral code is <b>fr</b> .Share this referral code with your friends and batch mates to register for this exam .For every registration done using your referral code you will earn cash back  of each transaction done with your Referral code. At the end of the registration period our team will be in touch with you and credit the amount directly in your account .
</p>

<p>
Meanwhile you are governed by the <a href='https://protrainy.com/tnc/ir-assessment_2020'>Terms & Conditions</a> agreed in the signing up. In case of any further information/clarification required, you may reach us at: <br>
<a href='mailto:contact@protrainy.com'>contact@protrainy.com</a> <br>
<a href='tel:7853834107'> +91-7853834107</a><br>
</p>

        Acknowledgement Receipt
    

   

    
   </body>
   </html>

    ";



$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Protrainy <no_reply@protrainy.com>' . "\r\n";
//$headers .= 'Cc: finance.inkfo@protrainy.com' . "\r\n";
//$headers .= 'Cc: accounts.iknfo@protrainy.com' . "\r\n";

$rese=mail($emaily,$subject,$msg,$headers);

if($rese){
    $ff="success";
}
else{
    $ff="one more step";
}
 echo $ff ;





?>
