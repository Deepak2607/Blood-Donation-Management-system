<?php
ob_start();
session_start();
require "DB_conn.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){

		$to = "9470569267ashish@gmail.com";
		$subject = $_POST['subject'];
		$txt = $_POST['message'];
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers = "From: ".$_POST['email']. "\r\n";

		if(mail($to,$subject,$txt,$headers)){
			echo '<script language="javascript">';
			echo 'alert("Success")';
			echo '</script>';
		}else{
			echo '<script language="javascript">';
			echo 'alert("Failed")';
			echo '</script>';
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/main2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="js/script.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPYMI9P4d29sp8AGl_4z9py1ZEt8YXmcI&callback=myMap"
  type="text/javascript"></script>


</head>
<body>

<div class="col-12" style="height: 350px;">
	<div id="comname">
		<i class="fa fa-balance-scale" aria-hidden="true"></i><br><br>BLOOD <b>DONATION</b>
	</div>
	<div id="nav" class="col-12">
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="about.php">About</a></li>
		  <li><a class="active" href="contact.php">Contact</a></li>
		  <li><a href="register.php">Be A Donor</a></li>
		  <li><a href="change_details.php">Change Details</a></li>
		  <li><a href="find_blood.php">Find Donor</a></li>
		  <?php 
		  	if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
				echo '<li style="background-color: rgba(255,0,0,0.5);"><a href="logout.php">Logout</a></ul>';
			}
		  ?>
		</ul>
	</div>
	<span class="info2" style="left: 40%">CONTACT</span>
	<img class="myFrontPic col-12" src="images/img11.jpg" style="height: 350px;">
</div>
<br>
	<div style="margin: 0; padding: 0; text-align: center; overflow: auto;">
		<div id="map" style="margin: 0; width:100%;height:400px;background:yellow">My map will go here</div>
		<div class="col-6" style="float: left; text-align: left; padding: 5%; background-color: rgb(217, 219, 224);">
		<h1 style="color: blue;">SUGGESTION</h1>
			<form action="contact.php" method="post">
				Name(required)<span style="color: red;">*</span><br>
				<input class="in" type="text" name="name" placeholder="Enter Name" required style=""><br><br>
				Email(required)<span style="color: red;">*</span><br>
				<input class="in" type="text" name="email" placeholder="Enter Your Email" required><br><br>
				Subject(required)<span style="color: red;">*</span><br>
				<input class="in" type="text" name="subject" placeholder="Enter Subject"><br><br>
				Message(required)<span style="color: red;">*</span><br>
				<textarea class="in" name="message" placeholder="Type your message" style="height: 300px;"></textarea><br><br>
				<input class="qw" style="font-size: 16px; color: white;" type="submit" value="SEND">
			</form>
		</div>
		
		<br>
		
		

		<div class="col-3" style="width: 15%;float: right; background-color: rgb(217, 219, 224); overflow: auto; text-align: left; margin: 0 3% 3% 3%">
			<h1 align="center" style="color: rgb(76, 109, 86); font-size: 20px;margin: 5%;">CONTACT</h1>
			<div align="center" style="height: 120px; width: 120px;margin: 5%;margin-left: 20%"><img class="im" src="deepppp.jpg"></div>
			
			<p align="center" style="color: rgb(76, 109, 86); font-size: 20px;margin: 5%;">Deepak Kumrawat</p>
			<p align="center" style="color: rgb(76, 109, 86); font-size: 20px;margin: 5%;">7898378532</p>
		</div>
	</div>


<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;">
	<?php include "footer.php"; ?>
</div>

</body>


</html>