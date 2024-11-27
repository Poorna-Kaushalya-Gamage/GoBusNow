<!DOCTYPE html>
<html >
<head>
 
 <title> Ticket Cancelation </title>
 <link rel="stylesheet" href="cancelation.css">
 
</head>
<body>
 
 <div class="container">
 
 <h1> Ticket Cancelation Request</h1><br>
 <div class="contact-box">
 
 <div class="cancelation">
 <h3> Send Your Request</h3><br>
 <form id="form" method="POST">
 <div class="input-group">
 
 <label for="user">  User Name :</label><br>
 <br>
 <input type="text" id="user" name="user" required><br>
 <br>
 </div>
 <div class="input-group">
 
 <label for="refid"> Ticket Reservation number :</label><br>
 <br>
 <input type="number" id="refid" name="refid"   required><br>
 <br>
 
 </div>
 <div class="input-group">
 
 <label for="email"> Your Email Address:</label><br>
 <br>
 <input type="email" id="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"><br>
 <br>
 
 </div>
 <div class="input-group">
 
 <label for="reason"> Reason :</label><br>
 <br>
 
 <input type="text" id="reason" name="reason" required><br>
 <br>
 </div>
 <div class="input-group">
 
 <label for="details"> Bank Details:</label><br>
 <br>
 
 <textarea id="details" rows="8" name="details" required></textarea>
 </div>
 <br>
 <input type="submit" value="SEND" id="sendbtn" class="button" name = "submit">
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

// Create a new record
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $refid = $_POST['refid'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];
    $details = $_POST['details'];

    $sql = "INSERT INTO cancelation (user, refid, email, reason, details) VALUES ('$user', '$refid', 'email', '$reason', '$details')";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Data inserted successfully";
    } else{
        die(mysqli_error($con));
    }
}
