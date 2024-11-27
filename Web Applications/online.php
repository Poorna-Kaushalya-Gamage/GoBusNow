<!DOCTYPE html>
<html>
<head>
    <title>Online Payment Form</title>

<link rel="stylesheet" href="online.css">

</head>
<body>
    <div class="container">
        <h1> Payment Details</h1>
<form id="form" method="post" >
                <div class="input-group" >
                    
                    <label for="Name"> Owner name :</label><br>
                    <br>
                    <input type="text" id="Name" name="Name" required><br>

                </div>
                <div class="input-group">
                    
                    <label for="Number"> Card Number :</label><br>
                    <br>
                    <input type="number" id="Number" name="Number" min="100000000000" max="999999999999" required>
                    

                </div> 
                <div class="input-group">
                    
                    <label for="cvv"> CVV :</label><br>
                    <br>
                    <input type="number" id="cvv" name="cvv" min="100"  max="999" required>
                    
                    <br>

                </div>
                <div class="selection">
                    <div class ="date">
                        <select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                        </select>
                        <select name="years" id="years">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        </select>
                    </div>
                    <div class="cards">
                        <img src="vs.png" alt="">
                        <img src="ae.png" alt="">
                        <img src="ms.png" alt="" >

                    </div>
                    
                </div>
                <h3>By clicking this button, you have agreed to<u><a href = "T&C.html" >Terms & Conditions</a></u></h3><br>
                <input type="submit" value="PLACE ORDER" id="sendbtn" class="button" name = "submit">
            </div>
            
</form>

</body>
</html>

<?php
// Create connection
$con = new mysqli('localhost','root','','bsbs');
// Check connection
if (!$con) {
  echo "Connection Successfully";
}

        if(isset($_POST['submit'])){
        $name = $_POST['Name'];
        $number = $_POST['Number'];
        $cvv = $_POST['cvv'];

        $sql = "INSERT INTO online (Name, Number, cvv) VALUES ('$name','$number','$cvv')";

        $result=mysqli_query($con,$sql);
        
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($conn));
        }
}