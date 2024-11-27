<!DOCTYPE html>
<html>
<head>
    <title> Bank Payment Method</title>
    <link rel="stylesheet" href="offline.css">
    
</head>
<body>
    <div class="section">
        <h2> Reciever's Account Details :</h2>
        <table class="section-top">
            <tr >
                <td class="first">Bank :</td>
                <td> We Need Money</td>
            </tr>
            <tr >
                <td class="first">Account No:</td>
                <td> 1345 6783 7003</td>
            </tr>
            <tr >
                <td class="first">G-mail :</td>
                <td> hellonobody@gmail.com</td>
            </tr>
        </table>
    </div>
    <div class="section-right">
        <form id="form1" method="post">
                
                    <label for="customer"> Customer name </label><br>
                    <br>
                    <input type="text" id="customer" required  name="customer"><br>
                    <br>
                    
                     
                    <label for="name"> Bank name </label><br>
                    <br>
                    <input type="text" id="bank" required  name="bank"><br>
                     
                    <label for="branch"> Branch name </label><br>
                    <br>
                    <input type="text" id="branch" required  name="branch"><br>
                    <br>

                     
                    <label for="account"> Account Number</label><br>
                    <br>
                    <input type="number" id="account" name="account" min="100000000000" max="999999999999" required><br>
                    <br>
                    
                     
                    <label for="pno"> Phone Number </label><br>
                    <br>
                    <input type="tel" id="pno" name = "pno" min="100000000" max="999999999" required> <br>
                    
            
            <br>
            <input type="submit" class="button" name="submit" value="CONFIRM">
        </form>
        <div class="error"></div>
    </div>
    <div class="section-bottom">
       <a href="offline2.php">
       <button class="btn">Upload Bank Slip</button>
    </a>
       
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
        $customer = $_POST['customer'];
        $bank = $_POST['bank'];
        $branch = $_POST['branch'];
        $account = $_POST['account'];
        $pno = $_POST['pno'];

        $sql = "INSERT INTO offline (customer, bank, branch, account, pno) VALUES ('$customer','$bank','$branch','$account','$pno')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($conn));
        }
}