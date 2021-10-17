<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: MediumSeaGreen;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
h1 {text-align: center;
}
p {text-align: center;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: MediumSeaGreen;
   color: white;
   text-align: center;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: MediumSeaGreen;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">DigiTech</a>
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href="registration.php">Register</a>
    <a href="login.php">Login</a>
  </div>
</div>


<form action="/registration.php" method= "post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<?php include('errors.php') ?>
	  <label for="id"><b>RSA ID Number</b></label>
    <input type="text" placeholder="Enter RSA ID Number" name="id" id="id" required>
	
	 <label for="firstname"><b>First name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" id="firstname" required>
	 
	 <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required>


	
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Log in</a>.</p>
  </div>
</form>

<div class="footer">
  <p>Copyright 2021 DigiTech, Department of Communications and Digital Technologies</p>
</div>
</body>
</html>
