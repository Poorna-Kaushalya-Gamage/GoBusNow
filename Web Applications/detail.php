<?php
session_start();

if(isset($_SESSION['Reference_ID'])&& isset($_SESSION['User_name'])) {
	

?>
<?php
  require_once('detailsdb.php');
  $query="select * from reservation_details";
  $result=mysqli_query( $conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
   <title>Details</title>
   <link rel="stylesheet" type="text/css" href="Styles/detail.css">
</head>
<body>
  
   <h3>Hello, <?php echo $_SESSION['User_name']; ?> </h3>
   <h1>My Reservation<h1>
   <hr>
   
   <div class="container">
    <div class="bus-details" >
      <h2>Bus Details</h2>
       
	   <?php
  $Ref_ID = $_SESSION['Reference_ID'];
  $username = $_SESSION['User_name'];
   
  $query = "SELECT * FROM reservation_details WHERE Reference_ID =  '$Ref_ID' AND User_name = '$username'";
  $result = mysqli_query($conn, $query);   

  
	   
  if($row = mysqli_fetch_assoc($result)){
  $Travelname = $row['Travel_name'];
  $Bustype = $row['Bus_type'];
  $Model = $row['Model'];
  $Busno = $row['Bus_no'];
  $Date = $row['Date'];
  $Departure_l = $row['Departure_location'];
  $Arrival_l = $row['Arrival_location'];
  $Departure_t = $row['Departure_time'];
  $Arrival_t = $row['Arrival_time'];
  $Seatno = $row['Seat_no'];
 
  echo "Travel Name:$Travelname <br><br><br>";
  
  echo "Bus Type:$Bustype &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Model: $Model <br><br><br>";
  
  echo "Bus No:$Busno <br><br><br>";
  }else{
	  echo "No reservation";
  }

  
  
  ?>   
    </div>
    <div class="ticket-details">
	 <h2>Ticket Details</h2>
	 
	       	   <?php
 
  echo "Date:$Date<br><br><br>";
  
  echo "Departure Location: $Departure_l &nbsp &nbsp &nbsp   Arrival Location:$Arrival_l<br><br><br>";
  
  echo "Departure Time: $Departure_t &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Arrival Time:$Arrival_t<br><br><br>";
  
  echo "Seat Numbers:$Seatno <br><br><br>"


 
 
 
  
  
  ?>

    </div>
  </div>  
  <div style="text-align: center;font-size: 20px;">
  <a href="cancelation.php"> Cancel Reservation Request </a>
</div>

</body>
</html>

<?php
}else{
	 header("Location:Reservation.php");
	 exit(); 
}
?>