<!DOCTYPE html>
<html >
<head>
 
 <title> Contact us </title>
 <link rel="stylesheet" href="contact.css">
 
</head>
<body>
 
 <div class="container">
 
 <h1> Get in Touch</h1><br>
 <div class="contact-box">
 
 <div class="contact-left">
 <h3> Send Your Request</h3><br>
 <form id="form" method="POST">
 <div class="input-group">
 
 <label for="name"> Your Name :</label><br>
 <br>
 <input type="text" id="name" name="name" required><br>
 <br>
 </div>
 <div class="input-group">
 
 <label for="number"> Phone No :</label><br>
 <br>
 <input type="number" id="number" name="number"  min="100000000" max="999999999"  required><br>
 <br>
 <div class="error"></div>
 </div>
 <div class="input-group">
 
 <label for="email"> Your Email Address:</label><br>
 <br>
 <input type="email" id="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"><br>
 <br>
 
 </div>
 <div class="input-group">
 
 <label for="subject"> Subject :</label><br>
 <br>
 
 <input type="text" id="subject" name="subject" required><br>
 <br>
 </div>
 <div class="input-group">
 
 <label for="message"> Your Message :</label><br>
 <br>
 
 <textarea id="message" rows="10" name="message" required></textarea>
 </div>
 <br>
 <input type="submit" value="SEND" id="sendbtn" class="button" name = "submit">
 </form>
 </div>
 <div class="contact-right">
 <h3><b> Our Office</b></h3>
 <br>
 <table>
 
 <tr><b>
 <td>Hot line</td>
 <td> +94 110 134 675</td>
 </b>
 </tr>
 <tr><b>
 <td>Email </td>
 <td> gobusnow@gmail.com</td>
 </b>
 </tr>
 <tr><b>
 <td>Address </td>
 <td>355/B,Maligawatha Road<br>Boralla,Colombo<br>Sri Lanka</td>
 </b>
 </tr>
 </table>
 </div>
 </div>
 </div>
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
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name, number,email, subject, message) VALUES ('$name','$number','$email','$subject','$message')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($conn));
        }
}