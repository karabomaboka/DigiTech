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
  <p>DigiTech  is a Department of Communications and Digital Technologies’ 
  portal for SMMEs in the  ICT sector. The DigiTech portal focuses on  
  collecting data of South African digital products ,accelerating digital 
  platforms use, and support efforts of scaling up digital trade services 
  through transformative technology applications and E-commerce platforms 
  as a way of positioning South Africa to compete  in the Global Digital Economy(GDE).</p>
  
  <img src="images/index.jpg" alt="Trulli" width="500" height="333">
  <p>The Department of Communications and Digital Technologies understands the needs 
  of digital products owners  in South Africa thats why it is committed to provide 
  market linkages and access to African continental markets through partnerships 
  and networks. The department  believes that ownership and control are key in 
  the development of the Digital Economy in South Africa. The portal serves as
  a showcase platform for  digital products  that are made by South Africans.</p>
</div>

<div class="footer">
  <p>Copyright 2021 DigiTech, Department of Communications and Digital Technologies</p>
</div>
</body>
</html>
