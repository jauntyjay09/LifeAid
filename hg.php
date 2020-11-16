
<?php 
$covidurl='https://'.'api.covid19india.org/state_district_wise.json';
    $covidjson=file_get_contents($covidurl);
    //https://api.covid19india.org/state_district_wise.json
    $covidarray=json_decode($covidjson,true);
   // $st=$covidarray['data']['contacts']['regional'][$val]['loc'];
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
<body >
    <div id="head"></div>

<?php 

echo 'hii';


?>

<?php echo $covidarray['Maharashtra']['districtData']['Ahmednagar']['active'] ; ?>
         
         
         
         <?php    
                   if(!empty($covidarray)){
                       $i=0;
        foreach($covidarray as $key=>$val){
            $i=$i+1;
    echo 'ption value="'.$key.'"><br>';
  
            /*if(true){
              echo '<option value="'.$sdc[i].'">'.$sdc.'</option>'; 
            }*/
            //echo $sdc['ownership'].'<br>';
            
        }
        }?>
 <!--  
<div class="container-fluid ">
    <div class="row pad">
        <div class=" card col-md-6 mx-auto pad">
            <h5 class="card-title text-center">Request Plasma</h5>
            <h6 class="card-subtitle mb-2 text-center text-muted">One Step closer to be a warrior!</h6>
            <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Recipient Name</label>
                    <input type="text" class="form-control" id="validationCustom01"  required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
               
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom012">Mobile No.</label>
                      <input type="text" class="form-control" id="validationCustom012"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom014">Recipient Blood group</label>
                      <input type="password" class="form-control" id="validationCustom014"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom015">Tested Positive On </label>
                      <input type="date" class="form-control" id="validationCustom015"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
               <div class="form-row">
      <div class="col-md-5 mb-3">
        
         

         <label class="ab" for="st">Enter State Name: hii-<?php echo $covidarray['Maharashtra']['districtData']['Ahmednagar']['active'] ; ?>
         
         
         
         <?php    
                   if(!empty($covidarray)){
        foreach($covidarray as $key=>$val){
            
    echo " , ";
  
           
            //echo $sdc['ownership'].'<br>';
            
        }
        }?>
         
         
         
         
         </label>
            <br>
           <input class="form-control" list="states" name="st" id="st" required="">
               <datalist id="states">
                  
                 
                    <option value="Puducherry"></option>
                    </datalist>
      </div>
      
    </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom04">State</label>
                        <select class="custom-select" id="validationCustom04" required>
                          <option selected disabled value="">Choose...</option>
                          <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select a valid state.
                        </div>
                      </div>
                    </div>
                    <div class="form-row">

                      <div class="col-md-6 mb-3">
                        <label for="validationCustom03">City</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                          Please provide a valid City.
                        </div>
                      </div>
                    </div>
                    <div class="form-row">

                  <div class="col-md-6 mb-3">
                    <label for="validationCustom13">Recipient Area/Region</label>
                    <input type="text" class="form-control" id="validationCustom13" required>
                    <div class="invalid-feedback">
                      Please provide a valid Area/Region.
                    </div>
                  </div>
                 
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Recipient Pincode</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
              </form>
        </div>
    </div>
</div>
   

-->

      
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
</html>