 <?php
 session_start(); 
 include "MyResdb.php";
if(isset($_POST['RefID'])&& isset($_POST['uname'])){
	function validate($data){
		 $data=trim($data);
		 $data=stripslashes($data);
		 $data=htmlspecialchars($data);
		 return $data;
	} 
	
	$RefID=validate($_POST['RefID']);
	$uname=validate($_POST['uname']);

    if(empty($RefID)){
		header("Location:Reservation.php?error=Reference ID is required");
	    exit(); 
	}else if(empty($uname)){
		 header("Location:Reservation.php?error=User name is required");
	     exit();
	}else{
		$sql="SELECT * FROM reservation where Reference_ID='$RefID' AND User_name='$uname'";
		 
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)===1 ){
			$row=mysqli_fetch_assoc($result);
			if($row['Reference_ID']===$RefID && $row['User_name']===$uname  ){
			   $_SESSION['Reference_ID']=$row['Reference_ID'];
			   $_SESSION['User_name']=$row['User_name'];
			   $_SESSION['Name']=$row['Name'];
			    header("Location:detail.php");
	             exit();
			}else{
			    header("Location:Reservation.php?error=Incorrect User name or password");
	             exit();
		} 	 
		}
	}
	
}else{
	header("Location:Reservation.php");
	exit();
}
 ?>