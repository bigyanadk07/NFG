<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["UserID"])) {
    $userID = $_GET["UserID"];
    
    // Fetch user data based on UserID
    $sql = "SELECT * FROM users WHERE UserID = '$userID'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $userData = $result->fetch_assoc();
    } else {
        // Handle the case where user not found
        echo "User not found.";
        exit();
    }
} else {
    // Handle the case where UserID is not provided
    echo "Invalid request.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission for updating user data
    $newFullName = $_POST["newFullName"];
    $newPhoneNumber = $_POST["newPhoneNumber"];
    $newAddress = $_POST["newAddress"];

    $updateSQL = "UPDATE users SET FullName = '$newFullName', PhoneNumber = '$newPhoneNumber', Address = '$newAddress' WHERE UserID = '$userID'";

    if ($mysqli->query($updateSQL) === TRUE) {
        echo "User data updated successfully!";
    } else {
        echo "Error updating user data: " . $mysqli->error;
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="./db_edituser.css">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
      <div class="title">
        <div class="adminName">Admin Dashboard</div>
        <div class="userInfo">
          <div class="userIcon">
            
            <p>User</p>
          </div>
          <div class="logoutBtn">Log Out</div>
        </div>
      </div>
    </div>
    <h1>Edit User</h1>

    <!-- Edit User Form -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] . "?UserID=" . $userID; ?>">
        <label for="newFullName">Full Name:</label>
        <input type="text" name="newFullName" value="<?php echo $userData['FullName']; ?>" required><br>

        <label for="newPhoneNumber">Phone Number:</label>
        <input type="text" name="newPhoneNumber" value="<?php echo $userData['PhoneNumber']; ?>" required><br>

        <label for="newAddress">Address:</label>
        <input type="text" name="newAddress" value="<?php echo $userData['Address']; ?>" required><br>

        <button type="submit" value="Update">Submit</button>
        <a href="userDashboard.php"><button type="button">Cancel</button></a>

    </form>

</body>
</html>
