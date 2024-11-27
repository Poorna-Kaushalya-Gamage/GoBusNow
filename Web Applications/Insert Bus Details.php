<!DOCTYPE html>     
<html>

<head>
  <title>Bus Details</title>
  <link rel="stylesheet" type="text/css" href="Bus Details.css">
</head>

<body>
    <div class="logo">
      <img src="bus-logo-WHITE.png" alt="Logo">
    </div>

    <header>
    <nav>
      
    </nav>
    </header>
                <div class="form-container">
                <form method="POST">
                          <div class="form-group">
                            <label for="bus-no">Bus No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="bus-no" name="bus-no"></label>
                          </div>

                          <div class="form-group">
                            <label for="travel-name">Travel Name:
                            <input type="text" id="travel-name" name="travel-name" required></label>
                          </div>

                          <div class="form-group">
                            <label for="bus-type">Bus Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="bus-type" name="bus-type" required></label>
                          </div>

                          <div class="form-group">
                            <label for="Route_Type">Route Type:&nbsp;&nbsp;
                            <input type="text" id="Route_Type" name="Route_Type" required></label>
                          </div>

                          <div class="form-group">
                            <label for="model">Model:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="model" name="model" required></label>
                          </div>

                          <div class="form-group1">
                            <label for="D_Location">Departure:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text1" id="D_Location" name="D_Location" required></label>
                          </div>

                          <div class="form-group1">
                            <label for="D_time">Departure Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text1" id="D_time" name="D_time" required></label>
                          </div>

                          <div class="form-group1">
                            <label for="A_Location">Arrival:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text1" id="A_Location" name="A_Location" required></label>
                          </div>

                          <div class="form-group1">
                            <label for="A_Time">Arrival Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text1" id="A_Time" name="A_Time" required></label>
                          </div>

                          <div class="form-group1">
                            <button type ="submit" value = "submit" name="submit" required>Submit</button>
                          </div>
                  </from>
                  </div>
</body>
</html>

<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $busno =$_POST['bus-no'];
    $travelname=$_POST['travel-name'];
    $bustype=$_POST['bus-type'];
    $roottype=$_POST['Route_Type'];
    $model=$_POST['model'];
    $dlocation=$_POST['D_Location'];
    $dtime=$_POST['D_time'];
    $alocation=$_POST['A_Location'];
    $atime=$_POST['A_Time'];

    $sql = "INSERT INTO bus(Bus_no,Travel_name,Bus_type,Root_type,Model,D_Location,D_time,A_Location,A_Time)
    values ('$busno','$travelname','$bustype','$roottype','$model','$dlocation','$dtime','$alocation','$atime')";

    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }
    else{
        die(mysqli_error($con));
    }
}
?>
