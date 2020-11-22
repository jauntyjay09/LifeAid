<?php 

     
    $covidurl='https://'.'api.covid19india.org/'.'data.json';
    $covidjson=file_get_contents($covidurl);
    $covidarray=json_decode($covidjson,true);
    $ac=$covidarray['statewise'][0]['active'];
    $rc=$covidarray['statewise'][0]['recovered'];
    $dc=$covidarray['statewise'][0]['deaths'];
    $ttc=$ac+$rc+$dc;

    $aac=$ac/$ttc*100;
    $aac=round($aac,2);
    $rrc=$rc/$ttc*100; 
    $rrc=round($rrc,2);
    $ddc=$dc/$ttc*100; 
    $ddc=round($ddc,2);


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
    <style>
        .dcc{
           color: #ff073a;

        }
        .acc{
           color: #007bff;

        }
        .rcc{
           color: #28a745;

        }
    </style>
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
          <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ma" >
            <h3 class="display-6"> 
                #Atmanirbhar Bharat <img style="max-width: 2em;" src="assets/flag.png">
            </h3>
          </div>-->
          <div class="col-md-4 mx-auto im ma">
            <img src="assets/grap.svg">
          </div>
          </div>
          </div>

     


    <div class="container-fluid">
        <div class="row col-md-10 mx-auto  ">
            <div class=" col-md-3 mx-auto alert-primary card ma">
               <div class="card-body">
                  <h5 class="card-title text-center acc">Active Cases</h5>
                   
                    <h2 class="card-title text-center acc"><b><?php echo $ac; ?></b></h2>
                     <h3 class="card-title text-center acc"><b><?php echo $aac; ?>%</b></h3>
                      <br>
                  <p class="card-text text-center acc">
                 <svg width="100" height="75" viewBox="0 0 100 75" preserveAspectRatio="xMidYMid meet"><path fill="none" stroke="#007bff99" stroke-width="2.5" d="M5,53.09274024339068C6.416666666666667,63.04637012169534,7.833333333333333,73,9.25,73C10.666666666666666,73,12.083333333333334,54.652538816617714,13.5,53.04867813680235C14.916666666666666,51.44481745698699,16.333333333333332,50.64288711707931,17.75,50.64288711707931C19.166666666666668,50.64288711707931,20.583333333333332,52.211498111624,22,52.211498111624C23.416666666666668,52.211498111624,24.833333333333332,49.284550286753394,26.25,48.23268988669744C27.666666666666668,47.18082948664149,29.083333333333332,46.46824730731571,30.5,45.90033571128829C31.916666666666668,45.33242411526088,33.333333333333336,44.82522031053295,34.75,44.82522031053295C36.166666666666664,44.82522031053295,37.583333333333336,46.5252832563995,39,48.530843474611835C40.416666666666664,50.53640369282417,41.833333333333336,56.85858161980696,43.25,56.85858161980696C44.666666666666664,56.85858161980696,46.083333333333336,48.82605958875367,47.5,48.82605958875367C48.91666666666667,48.82605958875367,50.333333333333336,49.328367603860684,51.75000000000001,49.328367603860684C53.16666666666667,49.328367603860684,54.583333333333336,47.7291579241852,56,46.693453629878306C57.416666666666664,45.65774933557141,58.833333333333336,43.11414183801931,60.25,43.11414183801931C61.666666666666664,43.11414183801931,63.083333333333336,61.889005455308435,64.5,61.889005455308435C65.91666666666667,61.889005455308435,67.33333333333333,61.09001258917331,68.75,59.49202685690307C70.16666666666667,57.89404112463282,71.58333333333333,53.36053993565534,73,51.3185060847671C74.41666666666667,49.27647223387886,75.83333333333333,48.9604490138481,77.25,47.23982375157365C78.66666666666667,45.51919848929921,80.08333333333333,40.99475451112044,81.5,40.99475451112044C82.91666666666667,40.99475451112044,84.33333333333333,46.21170793117919,85.75,46.21170793117919C87.16666666666667,46.21170793117919,88.58333333333333,43.415967268149394,90,40.6202266051196" stroke-dasharray="166.99520874023438" stroke-dashoffset="0"></path><circle fill="#007bff" r="2.5" cx="90" cy="40.6202266051196" style="opacity: 1;"></circle></svg>
                   <br>
                  </p>
                  
                </div>
              </div>
              <div class=" col-md-3 mx-auto alert-success card ma">
                <div class="card-body">
                   <h5 class="card-title text-center rcc">Recovered Cases</h5>
                  
                  <h2 class="card-title text-center rcc"><b><?php echo $rc; ?></b></h2>
                     <h3 class="card-title text-center rcc"><b><?php echo $rrc; ?>%</b></h3>
                      <br>
                   <p class="card-text text-center rcc">
                        <svg width="100" height="75" viewBox="0 0 100 75" preserveAspectRatio="xMidYMid meet"><path fill="none" stroke="#28a74599" stroke-width="2.5" d="M5,12.805310641787981C6.416666666666667,11.402655320893992,7.833333333333333,10,9.25,10C10.666666666666666,10,12.083333333333334,12.796698790239901,13.5,12.796698790239901C14.916666666666666,12.796698790239901,16.333333333333332,11.426876153372975,17.75,11.426876153372975C19.166666666666668,11.426876153372975,20.583333333333332,12.296314332581506,22,12.363415009226983C23.416666666666668,12.43051568587246,24.833333333333332,12.396965347549722,26.25,12.4640660241952C27.666666666666668,12.531166700840677,29.083333333333332,15.309206479393072,30.5,15.351189255689976C31.916666666666668,15.393172031986879,33.333333333333336,15.372180643838428,34.75,15.414163420135331C36.166666666666664,15.456146196432234,37.583333333333336,19.190460323969653,39,19.190460323969653C40.416666666666664,19.190460323969653,41.833333333333336,12.091065204018864,43.25,12.091065204018864C44.666666666666664,12.091065204018864,46.083333333333336,12.658460631535785,47.5,13.132561000615135C48.91666666666667,13.606661369694487,50.333333333333336,14.47959811359442,51.75000000000001,14.935667418494974C53.16666666666667,15.391736723395526,54.583333333333336,15.246770555669467,56,15.868976830018454C57.416666666666664,16.49118310436744,58.833333333333336,18.72326737748616,60.25,18.72326737748616C61.666666666666664,18.72326737748616,63.083333333333336,17.75766352265737,64.5,17.75766352265737C65.91666666666667,17.75766352265737,67.33333333333333,19.75938076686488,68.75,19.75938076686488C70.16666666666667,19.75938076686488,71.58333333333333,18.155154295673572,73,17.412112979290548C74.41666666666667,16.669071662907523,75.83333333333333,15.301132868566741,77.25,15.301132868566741C78.66666666666667,15.301132868566741,80.08333333333333,17.146760303465246,81.5,17.146760303465246C82.91666666666667,17.146760303465246,84.33333333333333,15.152578429362311,85.75,15.152578429362311C87.16666666666667,15.152578429362311,88.58333333333333,16.539624769325407,90,17.9266711092885" stroke-dasharray="99.4984130859375" stroke-dashoffset="0"></path><circle fill="#28a745" r="2.5" cx="90" cy="17.9266711092885" style="opacity: 1;"></circle></svg>
                       <br>
                  
                   </p>
                   
                 </div>
               </div>
               <div class=" col-md-3 mx-auto alert-danger card ma">
                <div class="card-body">
                   <h5 class="card-title text-center dcc">Deaths</h5>
                   <h2 class="card-title text-center dcc"><b><?php echo $dc; ?></b></h2>
                     <h3 class="card-title text-center dcc"><b><?php echo $ddc; ?>%</b></h3>
                      <br>
                   <p class="card-text text-center dcc">
                  
                    <svg width="100" height="75" viewBox="0 0 100 75" preserveAspectRatio="xMidYMid meet">
                        <path fill="none" stroke="#ff073a99" stroke-width="2.5" d="M5,12.020519171703164C6.416666666666667,12.155761418805115,7.833333333333333,12.291003665907066,9.25,12.83197265431487C10.666666666666666,13.372941642722672,12.083333333333334,18.03526206281581,13.5,18.03526206281581C14.916666666666666,18.03526206281581,16.333333333333332,14.109387694441693,17.75,12.770177350639058C19.166666666666668,11.430967006836422,20.583333333333332,10,22,10C23.416666666666668,10,24.833333333333332,11.770841177053402,26.25,11.770841177053402C27.666666666666668,11.770841177053402,29.083333333333332,10.279639354007726,30.5,10.279639354007726C31.916666666666668,10.279639354007726,33.333333333333336,12.691528782324381,34.75,12.691528782324381C36.166666666666664,12.691528782324381,37.583333333333336,12.345724759734468,39,12.345724759734468C40.416666666666664,12.345724759734468,41.833333333333336,18.33050629148915,43.25,18.33050629148915C44.666666666666664,18.33050629148915,46.083333333333336,14.745130288318634,47.5,13.58350341821064C48.91666666666667,12.421876548102642,50.333333333333336,11.360745070841176,51.75000000000001,11.360745070841176C53.16666666666667,11.360745070841176,54.583333333333336,13.67026652135143,56,13.67026652135143C57.416666666666664,13.67026652135143,58.833333333333336,13.648419696819577,60.25,13.648419696819577C61.666666666666664,13.648419696819577,63.083333333333336,14.257634003764986,64.5,15.476062617655803C65.91666666666667,16.69449123154662,67.33333333333333,21.486852273853163,68.75,22.349073615376994C70.16666666666667,23.211294956900826,71.58333333333333,23.64240562766274,73,23.64240562766274C74.41666666666667,23.64240562766274,75.83333333333333,19.181804220747054,77.25,17.438531655602894C78.66666666666667,15.695259090458734,80.08333333333333,13.523580699494705,81.5,13.182770236797785C82.91666666666667,12.841959774100864,84.33333333333333,12.724403051619936,85.75,12.671554542752403C87.16666666666667,12.618706033884871,88.58333333333333,12.605493906667988,90,12.592281779451104" stroke-dasharray="109.58739471435547" stroke-dashoffset="0"></path><circle fill="#ff073a" r="2.5" cx="90" cy="12.592281779451104" style="opacity: 1;"></circle></svg>
                        <br>
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
            <a href="d.php">
                 Donate Plasma
            </a>
          </div>
               
          <div class="col-md-2">

          </div>
             
          <div class="card col-md-5 ma bu text-center ">
            <a href="s.php">Request Plasma
            </a>
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
