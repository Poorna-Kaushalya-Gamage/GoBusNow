<?php
 
 $servername="localhost";
 $uname="root";
 $password="";
 $db="bsbs";
 
 $conn=mysqli_connect($servername,$uname,$password,$db);
 
 if(!$conn){
	 echo "Connection failed!";
 }
 