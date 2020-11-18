<?php 
require('creddb.php');

if(!empty($_GET['state'])&& !empty($_GET['bg'])){
    $val=mysqli_real_escape_string($conn, $_GET['state']);
    $bval=mysqli_real_escape_string($conn, $_GET['bg']);

    $select="select * from  usersdonor where state=".$val." OR ip=jai";
    
    $query=mysqli_query($conn,$select);
    
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
                <h5 class="card-title" style="text-align: center;">Enter state and blood gp.</h5>

                <form action="" method="GET"> 
                    <div class="form-row">
                    <div class="col-md-5 mb-3">
                    
                     
                    
                     <label class="ab" for="st">Enter State Name:</label>
                        <br>
                        <input class="form-control" list="state" name="state" id="st" required>
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
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Blood g.p</label>
                        <input type="text" name="bg" list="blood" class="form-control" id="validationCustom014"  required>
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
                      </div>
                    </div>
                    
                    
                    
                    <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                <br>
                <br>
                <div class="card mx-auto bg-success " >
                    <div class="card-header mx-auto">
                      Records
                    </div>
                    <div class="card" >
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">S.no</th>
                                <th scope="col">UID</th>
                                <th scope="col">Name</th>
                                <th scope="col">email</th>
                                <th scope="col">mobile</th>
                                <th scope="col">state</th>
                                <th scope="col">city</th>
                                <th scope="col">area</th>
                                <th scope="col">pin</th>
                                <th scope="col">blood</th>
                                <th scope="col">recovered on</th>
                                <th scope="col">reg time</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                     $t=1;
                     while($roe=mysqli_fetch_assoc($query)){
                         
                     ?>
                      <tr>
                        <td><?php echo $t; ?></td> 
                        <td><?php echo $roe['ip']; ?></td>
                        <td><?php echo $roe['fname']; ?></td>
                        <td><?php echo $roe['email']; ?></td>
                        <td><?php echo $roe['cono']; ?></td>
                        <td><?php echo $roe['state']; ?></td>
                        <td><?php echo $roe['city']; ?></td>
                        <td><?php echo $roe['region']; ?></td>
                        <td><?php echo $roe['pincode']; ?></td>
                        <td><?php echo $roe['bloodgp']; ?></td>
                        <td><?php echo $roe['date']; ?></td>
                        <td><?php echo $roe['reg_date']; ?></td>
                        
                      </tr>
                      
                      <?php $t=$t+1; } ?>

  
                            </tbody>
                          </table>
                          
                          
                    </div>
                   
                  </div> 
        

                </div>
                </div>
                </div>
                </div>

       
       
       
       
       
       
       
       
               <!-- <div class="container-fluid ">
                    <div class="row text-center col-md-10 mx-auto ma">
                      
                      <div class="col-md-4 mx-auto im ma">
                        <img src="assets/med2.jpg">
                      </div>
                      </div>
                      </div>-->
    
      




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
