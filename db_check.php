<?php

session_start();

include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $query = "SELECT User FROM admininfo WHERE username = '$username' AND password = '$password'";

    $authresult = $mysqli->query($query);

    if ($authresult) {
        if ($authresult->num_rows > 0) {
            // Fetch the user information
            $row = $authresult->fetch_assoc();
            $auth_user = $row['User'];

            $_SESSION['User_name'] = $auth_user; // Store 'User' column data in the session variable
            header("Location: userDashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid Username or Password!'); window.location.href = 'login.php';</script>";
        }
        $authresult->free_result();
    } else {
        echo "Error: " . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
}
?>
