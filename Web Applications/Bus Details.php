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
      <ul class="navbar">
        
    </nav>
    </header>

    <div class="form-container">
    <form method="POST">
      <div class="form-group">
      <h2>&nbsp;Bus Information</h2><br>
          <input type="text" id="bus-no" name="search" placeholder="Enter bus number" class= "search">&nbsp;
          <button id="view-photo-btn" name="submit">Search</button></label>
      </div>
    </form>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bsbs";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Search data from database
        if (isset($_POST['submit'])) {
            $search = $_POST['search'];
            $sql = "SELECT * FROM bus WHERE Bus_no='$search'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '
                         <div class="form-group">
                            <label for="bus-no">Bus No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="bus-no" name="bus-no" value="'.$row["Bus_no"].'"></label>
                          </div>

                          <div class="form-group">
                            <label for="travel-name">Travel Name:
                            <input type="text" id="travel-name" name="travel-name" value="'.$row["Travel_name"].'"></label>
                          </div>

                          <div class="form-group">
                            <label for="model">Bus Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="model" name="model" value="'.$row["Bus_type"].'"></label>
                          </div>

                          <div class="form-group">
                            <label for="Route_Type">Route Type:&nbsp;&nbsp;
                            <input type="text" id="Route_Type" name="Route_Type" value="'.$row["Root_type"].'"></label>
                          </div>

                          <div class="form-group1">
                            <label for="model">Model:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="model" name="model" value="'.$row["Model"].'"></label>
                          </div>

                          <div class="form-group1">
                            <label for="D_Location">Departure:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text1" id="D_Location" name="D_Location" value="'.$row["D_Location"].'"></label>
                          </div>

                          <div class="form-group1">
                            <label for="D_time">Departure Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text1" id="D_time" name="D_time" value="'.$row["D_time"].'"></label>
                          </div>
                          
                          <div class="form-group1">
                            <label for="A_Location">Arrival:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text1" id="A_Location" name="A_Location" value="'.$row["A_Location"].'"></label>
                          </div>

                          <div class="form-group1">
                            <label for="A_Time">Arrival Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text1" id="A_Time" name="A_Time" value="'.$row["A_Time"].'"></label>
                          </div>';
                }
            } 
            else {
                echo "<h3>0 results</h3>";
            }
        }
        $conn->close();
    ?>
    </div>
    <div class="form-group2">
            <button id="login-link" name="submit" ><a href ="Insert Bus Details.php"><h3>Insert</h3></a></button></label>
           
    </div>
    </div>

</body>
</html>
