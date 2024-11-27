<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted email and password
    $email = $_POST['email'];
    $password = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $passwordDB = ""; // Use a different variable name to avoid conflict
    $database = "bsbs";

    // Create a connection
    $conn = new mysqli($servername, $username, $passwordDB, $database); // Use the correct variable name

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query
    $sql = "SELECT * FROM loginform WHERE Lemail = '$email' AND Lpassword = '$password'";
    $result = $conn->query($sql);

    // Check if a matching row is found
    if ($result->num_rows === 1) {
        // Successful login
        header("Location: Home.php");
        echo "Login successful";
        
        exit;
    } else {
        // Unsuccessful login
        echo "Login unsuccessful";
        // Redirect back to the login form
        exit;
    }

    // Close the database connection
    $conn->close();
}
?>
