<?php 

session_start();

//retrive the user login values

$name = $_POST['name'];
$email=$_POST['email'];
$uname=$_POST['u_name'];
$password = $_POST['password'];
$cpassword = $_POST['c_password'];
$date = $_POST['date'];
$gender = $_POST['gender'];

// store user data in a session variables

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['uname'] = $uname;
$_SESSION['password'] = $password;
$_SESSION['cpassword'] = $cpassword;
$_SESSION['date'] = $date;
$_SESSION['gender'] = $gender;


// retrive session data
$name = $_SESSION['name'] ;
$email =$_SESSION['email'] ;
$uname =$_SESSION['uname'] ;
$password=$_SESSION['password']  ;
$_SESSION =$_SESSION['cpassword'] ;
$date =$_SESSION['date'] ;
$gender=$_SESSION['gender'] ;




?>