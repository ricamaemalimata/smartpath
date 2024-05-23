<?php
$conn = mysqli_connect("localhost", "admin", "09092003", "db_smartpath");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check if the username and password exist in the database
    $sql = "SELECT * FROM adminacc WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       header('Location: udl.php');
    } else {
        // Login failed
       $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: index.php');
    }
}

// Close connection
$conn->close();
?>
