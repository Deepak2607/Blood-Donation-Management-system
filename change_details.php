<?php
ob_start();
session_start();
require "DB_conn.php";

?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/main2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/script.js"></script>



</head>
<body>

<div class="col-12" style="height: 350px">
	<div id="comname">
		<i class="fa fa-balance-scale" aria-hidden="true"></i><br><br>BLOOD <b>DONATION</b>
	</div>
	<div id="nav" class="col-12">
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="about.php">About</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a href="register.php">Be A Donor</a></li>
		  <li><a class="active" href="change_details.php">Change Details</a></li>
		  <li><a href="find_blood.php">Find Donor</a></li>
		  <?php 
		  	if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
				echo '<li style="background-color: rgba(255,0,0,0.5);"><a href="logout.php">Logout</a></ul>';
			}
		  ?>
		</ul>
	</div>
	<span class="info2" style="left: 33%">CHANGE DETAILS</span>
	<img class="myFrontPic col-12" src="images/img10.jpg">
</div>
	








<?php

if(isset($_POST['uname']) && isset($_POST['psw'])){
	if(empty($_POST['uname']) || empty($_POST['psw'])){
		echo '<script language="javascript">';
			echo 'alert("Invalid Username And Password")';
			echo '</script>';
		echo '<div style="margin: 0; padding: 5%; text-align: center;">
				<h2>Invalid Username And Password</h2><br>
				<h2>Login Required</h2>
				<button onclick="document.getElementById('."'id01').style.display='block'".'" class="qw">Login</button>';
	}else{
		$username = $_POST['uname'];
    	$password = md5($_POST['psw']);
    	$QUERY = "SELECT id FROM donors WHERE username = '".$username."' AND password = '".$password."'";
		$result = mysqli_query($con, $QUERY);
    	if(mysqli_num_rows($result) != 1){
        	echo '<script language="javascript">';
			echo 'alert("Invalid Username And Password")';
			echo '</script>';
			echo '<div style="margin: 0; padding: 5%; text-align: center;">
				
				<button onclick="document.getElementById('."'id01').style.display='block'".'" class="qw">Login</button>';
        }else{

    		$row = mysqli_fetch_assoc($result);
    		session_regenerate_id();
    		$_SESSION['sess_user_id'] = $row['id'];
			header("Location: register.php");
		}
	}
}else{
	echo '<div style="margin: 0; padding: 5%; text-align: center;">
	<h2>Login Required</h2>
	<button onclick="document.getElementById('."'id01').style.display='block'".'" class="qw">Login</button>';
}

?>

		<div align="center" id="id01" class="modal" style="margin: 0; padding: 5%;text-align:left" >
		  
		  <form class="modal-content animate" action="change_details.php" method="post">
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		      <img src="images/img15.png" alt="Avatar" class="avatar">
		    </div>

		    <div class="container" align="center">
		      <label><b>Username</b></label>
		      <br>
		      <input style="width: 50%" class="in" type="text" placeholder="Enter Username" name="uname" required>
              <br>
		      <label><b>Password</b></label>
		      <br>
		      <input style="width: 50%" class="in" type="password" placeholder="Enter Password" name="psw" required><br><br>
		        <br>
		      <button style="width: 50%" type="submit" class="qw">Login</button>
		    </div>

		    <div class="container" style="background-color:#f1f1f1">
		      <!--<button type="button" class="qw" style="background-color:#bb0000;width: auto;" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
		    </div>
		  </form>
		</div>
	</div>


<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;">
	<?php include "footer.php"; ?>
</div>



</body>


</html>