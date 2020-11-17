<?php

        $subject = "Your Payment is Successful";
        $msg= "
    ​
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
    ​
    ​
    ​
    ​
    ​
            
          <h4> Dear <b>jai/b>, </h4>
    <p>This is an acknowledgement mail from Protrainy that your application form with Enrolment no. <b>rrr</b> and Successful Order ID <b>hop</b> for the
    IndustryReady Certification Course October 2020 has been Successfully Completed and Submitted . Please keep this receipt for future reference.
    </p>

    ​
            Acknowledgement Receipt
        
    ​
       
    ​
        
       </body>
       </html>
    ​
        ";
    
   
    ​
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Protrainy <no_reply@protrainy.com>' . "\r\n";
   
    ​
   $rtp= mail("$emaily","$subject",$msg,$headers);






if($rtp){
          echo "good";
}
else{
          echo "try";
}
?> 
