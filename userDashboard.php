<?php   

session_start();
error_reporting(0);
$user_name = $_SESSION['User_name'];
if($user_name == true){
}else{
  header("location:login.php");
}

include "db_connect.php";
 $mysqli = new mysqli($host, $username, $password, $database);
 $query = "select * from users";  
 $run = mysqli_query($mysqli,$query); 
 
 ?>   

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./userDashboard.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
    <style>
    #editbutton{
      border: 1px solid black;
      text-decoration: none;
      color: darkgreen;
      padding: 5px 10px;
      border-radius: 10px;
}

#editbutton:hover{
    background-color: darkslateblue;
    color: white;
    }
    @import url("https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Montserrat:wght@200&family=Space+Grotesk:wght@300&display=swap");

#deletebtn{
border: 1px solid black;
text-decoration: none;
color: darkred;
padding: 5px 10px;
border-radius: 10px;
}

#deletebtn:hover{
background-color: darkred;
color: white;
}
* {
margin: 0;
padding: 0;
font-family: "Space Grotesk", sans-serif;
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

.logoutBtn a{
color: white;
text-decoration: none;
}

.logoutBtn a:hover {
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

.navbar {
justify-content: center;
display: flex;
list-style: none;
background-color: #b5bfa1;
margin: 0 1px 0 1px;
padding: 5px;
font-family: "Space Grotesk", sans-serif;
}

.navbar li {
padding: 10px;
cursor: pointer;
}

.navbar li a{
color: black;
}
.navbar li:hover {
transform: scale(0.9);
transition: 0.3s;
color: #6e9887;
}

.userAddDel {
display: flex;
justify-content: flex-end;
margin: 10px;
}

.userAddDel a{
text-decoration:none;
color: white
}
.userAddDel button {
padding: 10px 20px;
margin-right: 10px;
border: 0;
background-color: #118ab2;
border-radius: 5px;
color: #fff;
cursor: pointer;

}

.userAddDel button:hover{
transform: scale(0.95);
transition: transform 0.3s ease-in-out;
}
.editButtons {
margin-right: 5px;
}

.deleteButton{
padding: 10px 20px;
margin-right: 10px;
border: 0;
background-color: #118ab2;
border-radius: 5px;
color: #fff;
cursor: pointer;
transition: transform 0.3s ease-in-out;
}

a{
text-decoration: none;
}

.home{
text-decoration: none;
color: black;
}

table {
border-collapse: collapse;
width: 80%;
margin-left: 100px;
}

th, td {
border-bottom: 1px solid black;
padding: 8px;
text-align: left;
}

tr{
padding: 10px;
}


    
    </style>
  </head>
  <body>
    <div class="header">
      <div class="title">
        <div class="adminName">Admin Dashboard</div>
        <div class="userInfo">
          <div class="userIcon">
            <p><?php
             echo $user_name; ?></p>
          </div>
          <div class="logoutBtn"><a href="./logout.php">Log Out</a></div>
        </div>
      </div>
      <div class="navbar">
        <li class="nav-links home" onclick="window.location.href='userDashboard.php'" >Home</li>
        <li class="nav-links">Employee</li>
        <li class="nav-links">Customer</li>
        <li class="nav-links">Services</li>
        <li class="nav-links">About</li>
      </div>
    </div>
    <div class="body">
      <div class="userAddDel">
        <button class="editButtons" id="addNewBtn" onclick="window.location.href='addNewUser.php'">Add New</button>
      </div>
      <div class="table">
          <table>  
            <tr class="heading">    
              <th>Full Name</th>  
              <th>Phone Number</th>  
              <th>UserID</th>  
              <th>Address</th>  
              <th></th>  
            </tr>  
            <?php    
              if ($num = mysqli_num_rows($run)>0) {  
                    while ($result = mysqli_fetch_assoc($run)) {  
                        echo "  
                              <tr class='data'>  
                                  <td>".$result['FullName']."</td>  
                                  <td>".$result['PhoneNumber']."</td>  
                                  <td>".$result['UserID']."</td>  
                                  <td>".$result['Address']."</td>   
                                  <td><a href='db_edituser.php?UserID=".$result['UserID']."' id='editbutton'>Edit</a></td>
                                  <td><a href='db_deleteuser.php?UserID=".$result['UserID']."' id='deletebtn'>Delete</a></td>  
                              </tr>  
                        ";  
                    }  
              }  
            ?>  
          </table> 
 </div>
      </div>
    </div>
    <script src="./userDashboard.js"></script>
  </body>
</html>
