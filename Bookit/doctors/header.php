<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>mms-doctors</title>
	<link rel="stylesheet" href="../patient/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:doctorlogin.php");
		}
	 ?>
<div class="container-fluid">
	<!-- 	this is for menu -->
	<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="myAppoinment.php" class="w3-bar-item w3-button w3-padding-large w3-white">My Appointments</a>
    <a href="myCustomer.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">My Customers</a>
    <a href="myDetails.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">My Details</a>
    <a href="../patient/logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
  </div>
	<!-- <div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				
				<li><a href="myAppoinment.php">My Appoinment</a></li>
				<li><a href="myCustomer.php">Customer Details</a></li>
				<li><a href="myDetails.php">My Details</a></li>
				<li><a href="../patient/logout.php">Logout</a></li>
			</ul>
		</nav>
	</div> -->
	
