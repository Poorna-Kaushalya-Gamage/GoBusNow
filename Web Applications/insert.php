<?php
$firstname=$_POST['firstname']?? '';
$lastname=$_POST['lastname']?? '';
$gender=$_POST['gender']?? '';
$nic=$_POST['nic']?? '';
$passport=$_POST['passport']?? '';
$username=$_POST['username']?? '';
$contactno=$_POST['mobile']?? '';
$email=$_POST['email']?? '';
$password=$_POST['pwd']?? '';

if(empty($firstname)||empty($lastname)||empty($gender)||empty($nic)||empty($passport)||empty($username)||
	empty($contactno)||empty($email)||empty($password)){
		  $servername="localhost";
          $dbUsername="root";
          $dbPassword="";
          $db="bsbs";
		  
		  $conn=new mysqli($servername,$dbUsername,$dbPassword, $db);
		  
		  if(mysqli_connect_error()){
			  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		  }else{
			$SELECT= "SELECT Email FROM registration where Email=? Limit 1";
			$INSERT="INSERT Into registration(Firstname,Lastname,Gender,NIC,
			Passport_id,Username,ContactNo,Email,Password) values(?,?,?,?,?,?,?,?,?) ";
			
			$stmt=$conn->prepare($SELECT);
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum=$stmt->num_rows;
			
			if ($rnum==0){
				$stmt->close();
				
				$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("ssssssiss",$firstname,$lastname,$gender,$nic,
				    $passport,$username,$contactno,$email,$password);
				$stmt->execute();	
				echo "New record inserted succesfully";
			}else{
				echo "someone already register using this email";
			}
			$stmt->close();
			$conn->close();
		  }
	}else{
			echo"necessary field are required";
			die();
		}
	

?>