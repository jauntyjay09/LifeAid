<?php 
if(!empty($_GET['st'])){
    $val=$_GET['st']; 
    $covidurl='https://'.'api.covid19india.org/'.'data.json';
    $covidjson=file_get_contents($covidurl);
    $covidarray=json_decode($covidjson,true);
    $ac=$covidarray['statewise'][0]['active'];
    
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
        <div class="row text-center col-md-10 mx-auto ma">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ma" >
            <h3 class="display-6"> 
                Welcome to LifeAid <br> Help Our Nation to flatten the curve
            </h3>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ma" >
            <h3 class="display-6"> 
                #Atmanirbhar Bharat <img style="max-width: 2em;" src="assets/flag.png">
            </h3>
          </div>
          <div class="col-md-4 mx-auto im ma">
            <img src="assets/grap.svg">
          </div>
          </div>
          </div>

     


    <div class="container-fluid">
        <div class="row col-md-10 mx-auto  ">
            <div class=" col-md-3 mx-auto bg-success card ma">
               <div class="card-body">
                  <h5 class="card-title text-center">Active Cases</h5>
                  <p class="card-text text-center">
                      <?php echo $ac; ?>
                  </p>
                  
                </div>
              </div>
              <div class=" col-md-3 mx-auto bg-warning card ma">
                <div class="card-body">
                   <h5 class="card-title text-center">Recovered Cases</h5>
                   <p class="card-text text-center">
                       74555651
                   </p>
                   
                 </div>
               </div>
               <div class=" col-md-3 mx-auto bg-danger card ma">
                <div class="card-body">
                   <h5 class="card-title text-center">Deaths</h5>
                   <p class="card-text text-center">
                       74555651
                   </p>
                   
                 </div>
               </div>
        </div>
    </div>    

    <div class="container-fluid ">
      <div class="row text-center col-md-4 mx-auto ma ">
        <div class="col-md-12 im ma">
          <img src="assets/share.svg">
          <h5 class="display-6">Become a Covid Warrior Save Life</h5>
         
        </div>
        <div class="alert alert-dark col-md-12 im ma" role="alert">
         " Everyday, family members and friends of COVID patients are tapping into all their contacts <br> earnestly hoping to 
                find a recovered person who is willing to donate plasma "

        </div>
     
      </div>
      </div>


      <div class="container-fluid">
        <div class="row col-md-4 mx-auto">
          <div class="card col-md-5 ma bu text-center">
            Request Plasma
            
          </div>
          <div class="col-md-2">

          </div>
          <div class="card col-md-5 ma bu text-center ">
            Donate Plasma
          </div>
        </div>
      </div>
    <div class="jumbotron jumbotron-fluid col-md-10 col-sm-10 mx-auto ko ma">
        <div class="container ">
          <div class="col-md-11 text-justify mx-auto">
            <h4 class="display-5  text-center">Know The Facts !</h4> <br>
            <ol>
              <li>The individual gains plasma within 24-72 hours post donation with no stress.
              </li>
              <li>You will Not be reinfected during the donation process.
              </li>
              <li>The process of donating plasma, from a patient point of view, is the same as donating blood.

              </li>
        
              <li> Plasma therapy is an experimental approach to tackle COVID-19.</li>
              <li>Plasma therapy is found to be effective for treatment of COVID-19 patients.</li>
            </ol>
           
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
