<?php 
session_start();
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
    <title>Zenn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&amp;display=swap" rel="stylesheet">
    <style>
        .pad{
            padding: 1em;
        
        }
        </style>
</head>
  <?php 
   if(!isset($refn)){
      ?>
<body >
    <div id="head"></div>

    
   
      
        <div class="container-fluid">
      <div class="row pad">
        <div class=" col-md-6 col-sm-4 col-xs-4 text-left mx-auto alert alert-success" role="alert">
          You can donate plasma if:<br>
          <ol>
            <li>You were tested positive for COVID-19</li>
            <li>You have fully recovered and are free of symptoms for 21 days</li>
            <li>You are between 18-60 years old</li>
            <li>Your weight is minimum 50 kg</li>
            <li>You have no chronic kidney/heart/lung or liver disease.</li>
            <li> Your Blood Pressure is normal</li>
            <li>You have never been pregnant(Women)</li>
            
          </ol>
         
          
        </div>
      </div>
    </div>
    
    
    
    
       
<div class="container-fluid ">
    <div class="row pad">
        <div class="  col-md-6 mx-auto pad">
            <h5 class="card-title text-center">Donate Plasma Save Life!</h5>
            <h6 class="card-subtitle mb-2 text-center text-muted">One Step closer to be a warrior!</h6>
            <form action=" " method="POST" class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Donor Name</label>
                    <input type="text" name="name" class="form-control" id="validationCustom01" maxlength=64 pattern="[a-zA-Z ]+"  required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
               
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom012">Donor Mobile No.</label>
                      <input type="text" name="cono" class="form-control" id="validationCustom012" maxlength=14 pattern="[-,+,0-9]+"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom012">Email Id</label>
                      <input type="email" name="email" class="form-control" maxlength=64 id="validationCustom012"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom014">Donor Blood Group</label>
                      <input type="text" name="bg" list="blood" class="form-control"  maxlength=15 pattern="[-,+,a-zA-Z ]+" id="validationCustom014"  required>
                      <datalist id="blood">
                        <option value="A+">
                        <option value="A-">
   <option value="B+">
    <option value="B-">
   <option value="AB+">
   <option value="AB-">
   <option value="O+">
   <option value="O-">
  </datalist>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom015">Donor Age</label>
                      <input type="text" name="age" class="form-control" id="validationCustom015"   maxlength=3  pattern="[0-9]+" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom015">Recovered From Covid-19 on</label>
                      <input type="date" name="date" class="form-control" id="validationCustom015"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom04">State/Union Territory</label>
                        <input class="form-control" list="state" name="state" id="st" maxlength=64 pattern="[a-zA-Z ]+" required>
                    <datalist id="state">
                     <option value="Andaman and Nicobar Islands">
<option value="Andhra Pradesh">
<option value="Arunachal Pradesh">
<option value="Assam">
<option value="Bihar">
<option value="Chandigarh">
<option value="Chhattisgarh">
<option value="Delhi">
<option value="Dadra and Nagar Haveli and Daman and Diu">
<option value="Goa">
<option value="Gujarat">
<option value="Himachal Pradesh">
<option value="Haryana">
<option value="Jharkhand">
<option value="Jammu and Kashmir">
<option value="Karnataka">
<option value="Kerala">
<option value="Ladakh">
<option value="Lakshadweep">
<option value="Maharashtra">
<option value="Meghalaya">
<option value="Manipur">
<option value="Madhya Pradesh">
<option value="Mizoram">
<option value="Nagaland">
<option value="Odisha">
<option value="Punjab">
<option value="Puducherry">
<option value="Rajasthan">
<option value="Sikkim">
<option value="Telangana">
<option value="Tamil Nadu">
<option value="Tripura">
<option value="Uttar Pradesh">
<option value="Uttarakhand">
<option value="West Bengal">
                     
               </datalist>
                        <div class="invalid-feedback">
                          Please select a valid state.
                        </div>
                      </div>
                    </div>
                    <div class="form-row">

                      <div class="col-md-6 mb-3">
                        <label for="validationCustom03">City/District</label>
                        <input type="text" name="city" class="form-control" maxlength=120  id="validationCustom03" required>
                        <div class="invalid-feedback">
                          Please provide a valid City.
                        </div>
                      </div>
                    </div>
                    <div class="form-row">

                  <div class="col-md-6 mb-3">
                    <label for="validationCustom13">Donor Area/Region</label>
                    <input type="text" name="area" class="form-control" maxlength=160  id="validationCusto13" required>
                    <div class="invalid-feedback">
                      Please provide a valid Area/Region.
                    </div>
                  </div>
                 
                  
                </div>
                <div class="form-row">
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Donor Pincode</label>
                    <input type="text" name="pin" class="form-control"  maxlength=6 pattern="[0-9]+" id="validationCustom05" required>
                    <div class="invalid-feedback">
                      Please provide a valid Pincode.
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck" style="color:blue;">
                      <a data-toggle="modal" data-target="#exampleModal"  role="button"> Agree to terms and conditions</a>
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Register</button>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        I confirm that -
        <ol>
          <li>The information I have provided is true to best of my knowledge.</li>
          <li>I fulfil the eligibility criteria for being a donor set by LifeAid. </li>
          <li> I am fine with sharing of my information provided here to LifeAid for 
            purpose of helping patients and sharing the information directly.</li>
          
        </ol>
       

      </div>
      
    </div>
  </div>
</div>


              </form>
        </div>
    </div>
</div>
 
   
     


      
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>


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
   
   <?php }
   else {
      ?>
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
   <?php } ?>
</html>
