<?php

session_start();

//initialize variables
$username = "";
$email = "";

$errors = array();
//Connect to db

$db = mysql_connect('localhost','root','','digitech') or die("could not connect to database");

//Register users

$username = mysql_real_escape_string($db, $_POST['username']);
$email = mysql_real_escape_string($db, $_POST['email']);
$password_1 = mysql_real_escape_string($db, $_POST['password_1']);
$password_2 = mysql_real_escape_string($db, $_POST['password_2']);

//form validation
if(empty($email)) {array_push($errors, "Email is required");};
if(empty($password_1)) {array_push($errors,"Password is required");}
if($password_1 != $password_2) {array_push($errors,"Passwords do not match");}

//Check for existing users
$user_check_query = "SELECT * FROM user WHERE email ='$email' LIMIT 1";

$results = mysql_query($db, $user_check_query);
$user = mysql_fetch_assoc($result);

if ($user) {
if($user['email'] === $email){array_push(errors,"This email id already exists");}
}

// Register the user if no error
if(count($errors) ==0){
	$password = md5($password_1); // this will encrypt the password
	$query = "INSERT INTO users(email, password) VALUES ($email, $password)";
	
	mysql_query($db, $query);
	$_SESSION['email'] =$email;
	$_SESSION['succes'] ="You are now logged in";
	
	header('location:apply.php');
}