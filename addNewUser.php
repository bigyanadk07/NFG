<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Montserrat:wght@200&family=Space+Grotesk:wght@300&display=swap");
        * {
  margin: 0;
  padding: 0;
  font-family: "Space Grotesk", sans-serif;
}
body{
}

.header .title {
  display: flex;
  justify-content: space-between;
  padding: 30px;
  font-family: "Space Grotesk", sans-serif;
  background-color: #6e9887;
  color: white;
}

.title {
  align-items: center;
}

.userInfo {
  display: flex;
  align-items: center;
}

.userIcon {
  display: flex;
  margin-right: 25px;
  cursor: pointer;
  align-items: center;
}

.userIcon img {
  margin-right: 20px;
}

.logoutBtn {
  cursor: pointer;
}

.logoutBtn:hover {
  transform: scale(0.9);
  transition: 1s;
  color: red;
}

.userIcon:hover {
  transform: scale(0.9);
  transition: 1s;
  color: #48cae4;
}

.userIconPicture {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 75vh;
}

a{
  text-decoration: none;
  color: black;
}

/* Add this to your CSS file */

.body{

  margin-top: 30px;
}
.form {
  max-width: 700px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  background-color: #fff;
}

.form h2 {
  text-align: center;
  color: #333;
}

.inputSection {
  margin-top: 10px;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
  color: #555;
}

input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

button {
  background-color: #007bff;
  color: #fff;
  padding: 10px 30px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #999999;
  color: white;
}

p {
  text-align: center;
  margin-top: 10px;
}

a {
  text-decoration: none;
  color: #007bff;
}

a:hover {
  color: #0056b3;
}

.form h2{
  border-bottom: 1px solid black;
  margin-top: 10px;

}

.buttons{
  display: flex;
  justify-content: center;
  gap: 10px;
}

input:hover{
  border: 1px solid #999999;
}
    </style>
</head>
<body>
<div class="header">
      <div class="title">
        <div class="adminName">Admin Dashboard</div>
        <div class="userInfo">
          <div class="userIcon">
            <img src="userIcon.jpg" alt="usericon" class="userIconPicture" />
            <p>User</p>
          </div>
          <div class="logoutBtn">Log Out</div>
        </div>
      </div>
    </div>
    <div class="body">
        <div class="form">
          <h2>Add New User Information</h2>
          <form action="process_add_user.php" method="post">
          <div class="inputSection">
            <label for="FullName">Full Name</label>
            <input type="text" name="FullName" id="FullName">
            <label for="PhoneNumber">Phone Number</label>
            <input type="text" name="PhoneNumber" id="PhoneNumber">
            <label for="UserID">User ID</label>
            <input type="text" name="UserID" id="UserID">
            <label for="Address">Address</label>
            <input type="text" name="Address" id="Address">
          </div>
          <div class="buttons">
          <button type="submit">Submit</button>
          <button type="reset">Clear</button>
          </div>
          <p><a href="userDashboard.php">Go Back</a></p>
          
          </form>
        </div>
</div>

</body>
</html>