<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
  </head>
  <body>
  <div class="grid-container">
      <div class="centered-box left-box">
        <div class="overlay">
          <p>
            NEXUS <br />FINANCE <br />
            GROUP
          </p>
        </div>
      </div>
      <div class="centered-box right-box">
        <!-- Your content for the second box goes here -->
        <div class="loginTitle"><h2>Admin Login</h2></div>
        <div class="formContainer">
          <form action="db_check.php" method="post">
            <label for="Username">Username</label><br />
            <input
              type="text"
              name="Username"
              id="Username"
              placeholder="Enter your username"
            /><br />
            <label for="Password">Password</label><br />
            <input
              type="password"
              name="Password"
              id="Password"
              placeholder="Enter your password"
            /><br />
            <button type="submit">
              Log In <i class="fa-solid fa-arrow-right"></i>
            </button>
            <p><a href="#">Forgot Password?</a></p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
