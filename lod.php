
<?php 
require('creddb.php');
              
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
   
    $email = mysqli_escape_string($conn,$_GET['email']); // Set email variable
    $hash = mysqli_escape_string($conn,$_GET['hash']); // Set hash variable
                  
    $search = mysqli_query($conn,"SELECT email, hash, active FROM rusers WHERE email='".$email."' AND hash='".$hash."' AND active='0'") ; 
    $match  = mysqli_num_rows($search);
                  
    if($match > 0){
       
        mysqli_query($conn,"UPDATE rusers SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") ;
       $msg='Your account has been activated, you can now login';
    }else{
        // No match -> invalid url or account has already been activated.
        $msg= 'The url is either invalid or you already have activated your account.';
    }
                  
}else{
    // Invalid approach
    $msg= 'Invalid approach, please use the link that has been send to your email.';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="in.css">
</head>
<body>
    <div id="head"></div>

    
     <?php 
  if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
   {
       ?>
        <div class="container-fluid">
      <div class="row pad">
        <div class=" col-md-6 col-sm-4 col-xs-4 text-center mx-auto alert alert-success" role="alert">
          <?php echo $msg; ?> 
        </div>
      </div>
    </div>
    
    <?php
   }
  ?>
    <div class="container-fluid ">
        <div class="row text-center col-md-10 mx-auto ma">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ma" >
            <h3 class="display-6"> 
                Just a moment..
            </h3>
          </div>
         
          <div class="col-md-4 mx-auto im ma">
            <img src="assets/loadng.svg">
          </div>
          </div>
          </div>

     

  




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
        <script>
            $(function () {
                $("#head").load("head.html");
                $("#foot").load("favt.html");
            })
        </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>