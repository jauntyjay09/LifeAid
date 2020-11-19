<?php 
require('creddb.php');

if (isset($_POST['name'])  && isset($_POST['cono'])){
   
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $cono = mysqli_real_escape_string($conn, $_POST['cono']);
    $bg = mysqli_real_escape_string($conn, $_POST['bg']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $area = mysqli_real_escape_string($conn, $_POST['area']);
    $pin = mysqli_real_escape_string($conn, $_POST['pin']);
    $nam= substr("$name",0,3);
    $nam=strtoupper("$nam");
    $phon= substr("$cono",2,6); 
    $ron=rand(10,1000);
    $refn=$nam.$ron.$phon; 
   
     //ip 	email 	fname 	cono 	bloodgp 	age 	date 	state 	city 	region 	pincode 	reg_date 
        $sql = "INSERT INTO `usersdonor` (ip,email,fname,cono,bloodgp,age,date,state,city,region,pincode ) VALUES 
          ('". mysqli_escape_string($conn,$refn) ."', '". mysqli_escape_string($conn,$email) ."', '". mysqli_escape_string($conn,$name) ."', '". mysqli_escape_string($conn,$cono) ."', '". mysqli_escape_string($conn,$bg) ."', '". mysqli_escape_string($conn,$age) ."', '". mysqli_escape_string($conn,$date) ."', '". mysqli_escape_string($conn,$state) ."', '". mysqli_escape_string($conn,$city) ."', '". mysqli_escape_string($conn,$area) ."', '". mysqli_escape_string($conn,$pin) ."')";
         $result = mysqli_query($conn,$sql);
         
       
        
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeAid</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="in.css">
</head>
<body>
    <div id="head"></div>



    <div class="container-fluid ">
        <div class="row text-center col-md-8 mx-auto ma ">
          <div class=" col-md-8 im mx-auto ma">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;"><b>Thanks For Registering With Us</b></h5><br>
                <h5 class="display-5 text-left">You have taken a step ahead of others by contributing your part this could help
                    our nation to tackle this global pandmic.</h5>
               <br>
                    <h5 class="display-5 text-left">Our team is working on its best to find a match and save life.</h5>
                <br>
                <br>
                <h5 class="card-title">
                    <b>Share LifeAid Save Life!</b> <br>Your Unique ID : <?php echo $refn; ?>
                    
                </h5>

                </div>
                </div>
                </div>
                </div>

                <div class="container-fluid ">
                    <div class="row text-center col-md-12 mx-auto ma">
                      
                      <div class="col-md-6 mx-auto im ma">
                       <h5 class="display-6">If you have any Queries kindly acknowledge us at<br> <a href="mailto:social.lifeaid@gmail.com"
                        >social.lifeaid@gmail.com</a
                      > </h5>
                      </div>
                      </div>
                      </div>
    
      




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
        <script>
            $(function () {
                $("#head").load("whead.html");
                $("#foot").load("favt.html");
            })
        </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>
