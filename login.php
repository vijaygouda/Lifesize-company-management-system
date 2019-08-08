<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<h2>Login Form</h2>
<form action="loginlink.php">
  <div class="imgcontainer">
    <img src="login.png" alt="Avatar" class="avatar" align="left">
  </div>

  <div class="container">
    <label for="uname" class="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br></br>
    <label for="psw" class="user"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br></br>
    <p align="center">
    <button type="submit" class="btn" >Login</button>
	</p>

  </div>

  <div class="container" style="background-color:#f1f1f1">
  	<p class="cancel">
    <button type="button" class="cancelbtn">Cancel</button>

    <span class="psw"> <a href="#">Forgot password?</a></span>
</p>
  </div>
</form>



</body>
</html>