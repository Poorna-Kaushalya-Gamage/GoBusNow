<!DOCTYPE html>
<html>

<head>
  <title>GoBusNow</title>
  <link rel="stylesheet" type="text/css" href="Home.css">
  <link rel="stylesheet" type="text/css" href="Login.css">
  <script src="load.js"></script>
</head>

<body>
    <div class="logo">
      <img src="bus-logo.png" alt="Logo">
    </div>

    <header>
    <nav>
      <ul class="navbar">
        <li><a href="#">Home</style></a></li>
        <li>
         <div class="dropdown">
            <button class="dropbtn">Reservation</button>
            <div class="dropdown-content">
                <a href="Reservation.php">MyReservation</a>
                <a href="Bus Details.php">Bus Details</a>
            </div>
        </li>
        <li><a href="contact.php">Contact Us</a></li>
        <li>
          <div class="search-box">
            <input type="text" placeholder="Search">&nbsp;
            <button type="submit" value = "Search">
          </div>
        </li>
        <li> <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
                <a href="Register.html">Sign up</a>
                <a href="#" id="login-link">Login</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>
  </div>
  </header>

  <!--Login page-->
  <div id="login-modal" class="modal">
    <div class="modal-content">
      <span class="close" id="close-login">&times;</span>
      <form  method = "POST" action = "login.php">
        <h2>Login to your account</h2>
        <hr><br>

        <div class="form-group">
          <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="email" id="email" name="email" placeholder="Enter your email" required></label>
        </div>

        <div class="form-group">
          <label for="password">Password:
          <input type="password" id="password" name="password" placeholder="Enter your password" required></label>
        </div>
        <br>
        <div class="form-group">
          <center><input class="button1" type="submit" value="Login"></center>
        </div>
        <br>
        <b>
        <div class="form-group">
        <center><p>Don't have an account? <a href="Register.html">Create a new account</a></p></center>
        </div>
      </b>
      </form>
    </div>
  </div>

  <script>
    var loginLink = document.getElementById("login-link");
    var loginModal = document.getElementById("login-modal");
    var closeLogin = document.getElementById("close-login");

    loginLink.addEventListener("click", function() {
      loginModal.style.display = "block";
    });

    closeLogin.addEventListener("click", function() {
      loginModal.style.display = "none";
    });
  </script>

  <!--End of the Login page-->

  <a href="#" class="scroll-up-arrow"></a>
  <main>
    <section id="home">
      <div class="hero">
        <h2>Welcome to GoBusNow</h1>
        <p>Online Bus seat Reservation around Sri Lanka.</p>
      </div>
    </section>

    <div class="form-container">
  <form action="SearchBus.php" method="post">
    <h3>Search Buses and Make Reservations...</h3><br>
    <div class="form-group">
      <select id="dropdown_from" name="dropdown_from">
        <option value="">From / Departure</option>
        <?php
        // Step 1: Establish a database connection
        $connection = mysqli_connect('localhost', 'root', '', 'bsbs');

        // Step 2: Execute a query to retrieve the data for "From / Departure" dropdown
        $query = "SELECT DISTINCT D_Location FROM bus";
        $result = mysqli_query($connection, $query);

        // Step 3: Fetch the result set and generate the dropdown options
        while ($row = mysqli_fetch_assoc($result)) {
          $departure = $row['D_Location'];
          echo '<option value="' . $departure . '">' . $departure . '</option>';
        }

        // Step 4: Close the database connection
        mysqli_close($connection);
        ?>
      </select>
      
      <select id="dropdown_to" name="dropdown_to">
        <option value="">To / Arrival</option>
        <?php
        // Repeat steps 2 and 3 for the "To / Arrival" dropdown
        $connection = mysqli_connect('localhost', 'root', '', 'bsbs');
        $query = "SELECT DISTINCT A_Location FROM bus";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
          $arrival = $row['A_Location'];
          echo '<option value="' . $arrival . '">' . $arrival . '</option>';
        }

        mysqli_close($connection);
        ?>
      </select>
    </div>

    <div class="form-group">
   <button name="reservation" class = "button1"> <a href="Reservation.html">Reservation</a></button>
    </div>
  </form>
</div>

    

    <section id="About">
      <div class = "aboutimg">
        <img src = "about.png" alt = "Bus Image" width = "500px" height="300px">
      </div>
      <div class="about">
        <h2>About Us</h2><br>
        <p><b>Welcome to our web page for bus scheduling and booking system in Sri Lanka!</b><br><br>
          We are excited to provide you with a convenient and user-friendly platform to plan your bus journeys across the beautiful island.
          Our website offers a comprehensive range of features to simplify your travel experience, 
          allowing you to effortlessly browse through various bus routes, departure times, and fares. <br><br>With just a few clicks, 
          you can easily book your desired seats, ensuring a hassle-free journey. Our platform is designed to cater to both locals and tourists, 
          providing a seamless and efficient way to explore the stunning landscapes, cultural landmarks, and vibrant cities of Sri Lanka. 
          Whether you're commuting to work, embarking on a weekend getaway, or embarking on a grand adventure, 
          our bus scheduling and booking system is here to make your travel experience as smooth as possible. Start planning your next journey with us today!</p>
        </div>
    </section>

    <div class = "image">
      <img src = "background10.png" align = "right">
    </div>

      <div class="services">
        <hr><br>
        <h2 class="services-heading">Our Services</h2><br>
        <div class="services-image">
          <div class="service">
            <img src="document.png" alt="Service 1" class="service-image">
            <h3><br>Real-Time Informations</h3><br>
            <p>Real-time bus tracking provides passengers with accurate and up-to-date information about their buses, 
              which reduces waiting time and improves the travel experience.</p>
          </div>
          <div class="service">
            <img src="Time.png" alt="Service 2" class="service-image">
            <h3><br>Seat Reservation</h3><br>
            <p>Passengers can easily choose and reserve their preferred seats in advance, resulting in a comfortable and personalized travel experience.</p>
          </div>
          <div class="service">
            <img src="TIMETABLE.png" alt="Service 3" class="service-image">
            <h3><br>Schedule Management</h3><br>
            <p>Schedule management and alerts help passengers plan their journeys effectively, minimizing missed buses and providing a stress-free travel experience.</p>
          </div>
        </div>
        <br><br><hr>
      </div>

      <section id="facilities">
        <div class = "facilities-h2"><h2> - Facilities - </h2></div>
        <div class="facility">
          <div class="facility-category">
            <h3>Traveler :- </h3>
            <ul class="inline-list">
              <li>Free Wi-Fi</li>
              <li>Comfortable seating</li>
              <li>On-board entertainment</li>
              <li>Power outlets for charging devices</li>
              <li>Complimentary refreshments</li>
            </ul>
          </div>

          <div class="facility-category">
            <h3>Member :- </h3>
            <ul class="inline-list">
              <li>Priority boarding</li>
              <li>Exclusive lounge access</li>
              <li>Dedicated customer support</li>
              <li>Discounted fares</li>
              <li>Special offers and promotions</li>
            </ul>
          </div>

          <div class="facility-category">
            <h3>Regular :- </h3>
            <ul class="inline-list">
              <li>Standard seating</li>
              <li>Flexible booking options</li>
              <li>Affordable fares</li>
              <li>Convenient schedules</li>
              <li>Easy cancellation and refund policy</li>
            </ul>
          </div>
 
        </div>
      </section>

    <div class = "payment">
      <img src="icon-paypal-card.png" alt="Access Card 1" class="access-card" style="width: 250px; height: 140;">
      <a href = "FAQ.html" ><h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>FQA </h3></a>
      <a href = "T&C.html" ><h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>T&C </h3></a>
    </div>

    


  </main>
</body>

</html>


