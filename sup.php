<?php 
if(!empty($_GET['st'])){
    $val=$_GET['st'];
    $covidurl='https://'.'api.rootnet.in/'.'covid19-in/contacts'.urlencode($_GET['st']);
    $covidjson=file_get_contents($covidurl);
    $covidarray=json_decode($covidjson,true);
   // $st=$covidarray['data']['contacts']['regional'][$val]['loc'];
    
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
          <div class="card col-md-12 im ma">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Helpline No.</h5>

                <form action="">
                <div class="form-row">
                    <div class="col-md-5 mb-3">
                      <label class="ab" for="st">Enter State Name:</label>
                          <br>
                         <input class="form-control" list="states" name="st" id="st" required>
                             <datalist id="states">
                                <option value="Andhra Pradesh">
                                   <option value="Arunachal Pradesh">
                                   <option value="Assam">
                                   <option value="Bihar">
                                   <option value="Chhattisgarh">
                                   <option value="Goa">
                                   <option value="Gujarat">
                                   <option value="Haryana">
                                   <option value="Himachal Pradesh">
                                   <option value="Jharkhand">
                                   <option value="Karnataka">
                                   <option value="Kerala">
                                   <option value="Madhya Pradesh">
                                   <option value="Maharashtra">
                                   <option value="Manipur">
                                   <option value="Meghalaya">
                                   <option value="Mizoram">
                                   <option value="Nagaland">
                                   <option value="Odisha">
                                   <option value="Punjab">
                                   <option value="Rajasthan">
                                   <option value="Sikkim">
                                   <option value="Tamil Nadu">
                                   <option value="Telengana">
                                   <option value="Tripura">
                                   <option value="Uttarakhand">
                                   <option value="Uttar Pradesh">
                                   <option value="West Bengal">
                                   <option value="Andaman and Nicobar Islands">
                                   <option value="Chandigarh">
                                   <option value="Dadra and Nagar Haveli">
                                   <option value="Daman & Diu">
                                   <option value="Delhi">
                                   <option value="Jammu and Kashmir">
                                   <option value="Ladakh">
                                   <option value="Lakshadweep">
                                   <option value="Puducherry">
                             </datalist>
                    </div>
                    
                  </div>
                  <button class="btn btn-primary" type="submit">Submit</button>
                </form>
                <br>
                <br>
                <h5 class="card-title">
                    
                    <?php 
                      if(!empty($covidarray)){
                      foreach($covidarray['data']['contacts']['regional'] as $sdc){
                          if($val==$sdc['loc']){
                               
                              echo 'Connect To: <a href="tel:'.$sdc['number'].'" style="color: #FFB533">'. $sdc['number'].'</a>';
                          }
                         // echo ' option value="'.$sdc['loc'].'"><br>';
                          
                      }
                      }?>
                </h5>

                </div>
                </div>
                </div>
                </div>

                <div class="container-fluid ">
                    <div class="row text-center col-md-10 mx-auto ma">
                      
                      <div class="col-md-4 mx-auto im ma">
                        <img src="assets/grap.svg">
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
