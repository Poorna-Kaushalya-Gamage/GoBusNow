<!DOCTYPE html>
<html>
<head>
   <title>My Reservation</title>
   <link rel="stylesheet" type="text/css" href="Styles/style1.css">
</head>
<body>
    <form action="MyRes.php" method="post">
        <h2>My Reservation</h2>
		<?php if(isset($_GET['error'])){ ?>
			<p class="error"><?php echo $_GET['error']; ?></p> 
		<?php } ?>
		<label>Enter Reference ID</label>
		<input type="text" name="RefID" placeholder="Reference ID"><br>
		
		<label>User Name</label>
		<input type="text" name="uname" placeholder="User Name"><br>
		
		<button type="submit">Submit</button>
    </form>
</body>
</html>