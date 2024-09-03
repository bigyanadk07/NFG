<?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = $_POST["FullName"];
    $phoneNumber = $_POST["PhoneNumber"];
    $userID = $_POST["UserID"];
    $address = $_POST["Address"];

    // Validate and sanitize data
    $fullName = mysqli_real_escape_string($mysqli, $fullName);
    $phoneNumber = mysqli_real_escape_string($mysqli, $phoneNumber);
    $userID = mysqli_real_escape_string($mysqli, $userID);
    $address = mysqli_real_escape_string($mysqli, $address);

    // Insert data into Users table
    $query = "INSERT INTO Users (FullName, PhoneNumber, UserID, Address) 
              VALUES ('$fullName', '$phoneNumber', '$userID', '$address')";

    if ($mysqli->query($query)) {
        // Data inserted successfully, redirect to userDashboard.php
        header("Location: userDashboard.php");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        // Error in insertion
        echo "Error: " . $mysqli->error;
    }

    $mysqli->close();
} else {
    // Invalid request method
    echo "Invalid request method.";
}
?>
