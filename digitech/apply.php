<?php
session_start();

if(isset($_SESSION['email'])){
	
	$_SESSION['msg'] = "You must log in to view this page";
	header("location :login.php");

}
if (isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['email']);
	header("location : login.php");
	
}
?>
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
  background-color: #f1f1f1;
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

<div style="padding-left:10px">
  <h1>Welcome to DigiTech Portal</h1>
  <?php
    if(isset($_SESSION['success'])) : ?>
	<h3>
		<?php
		echo $_SESSION['success'];
		unset($_SESSION['success']);
		?>
	</h3>
</div>
<?php endif ?>
//if the user logs in print Information about his

<?php if(isset($_SESSION['email'])) : ?>
   <h3>Welcome <strong><?php echo $_SESSION['email'] ?></strong></h3>
   <button><a href ="apply.php?logout='1'"></a></button>
 <?php endif ?>

<div class="footer">
  <p>Copyright 2021 DigiTech, Department of Communications and Digital Technologies</p>
</div>
</body>
</html>

