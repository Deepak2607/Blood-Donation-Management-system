<?php
ob_start();
session_start();
require "DB_conn.php";


if(isset($_POST['fullname']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['bloodgroup']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['state']) && isset($_POST['town']) && isset($_POST['username']) && isset($_POST['password'])){
	if(!empty($_POST['fullname']) && !empty($_POST['gender']) && !empty($_POST['dob']) && !empty($_POST['bloodgroup']) && !empty($_POST['mobile']) && !empty($_POST['email']) && !empty($_POST['state']) && !empty($_POST['username']) && !empty($_POST['password']) ){
		$user = $_POST['username'];
		$pw = md5($_POST['password']);
		$f_name = $_POST['fullname'];
		$birthday = $_POST['dob'];
		$sex = $_POST['gender'];
		$blood = $_POST['bloodgroup'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$town = $_POST['town'];
		$state = $_POST['state'];


		if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
			$sess=$_SESSION['sess_user_id'];
			$SQL="UPDATE donors SET username='".$user."',password='".$pw."',fullname='".$f_name."',dob='".$birthday."',sex='".$sex."',bloodgroup='".$blood."',mobile='".$mobile."',email='".$email."',town='".$town."',state='".$state."' WHERE id='".$sess."'";
		}else{
			$SQL = "INSERT INTO donors (username, password, fullname, dob, sex, bloodgroup, mobile, email, town, state) VALUES ('".$user."', '".$pw."', '".$f_name."', '".$birthday."', '".$sex."', '".$blood."', '".$mobile."', '".$email."', '".$town."', '".$state."')";
		}

		$query_run = mysqli_query($con,$SQL);

		if($query_run){
			echo '<script language="javascript">';
			echo 'alert("message successfully sent")';
			echo '</script>';
			if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
				header("Location: logout.php");
			}
		}
		else{

			echo '<script language="javascript">';
			echo 'alert("REGISTRATION FAILED")';
			echo '</script>';
		}
	}else{
		echo '<script language="javascript">';
		echo 'alert("PLEASE FILL AND SELECT ALL REQUIRED FIELDS")';
		echo '</script>';
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
		  <li><a class="active" href="register.php">Be A Donor</a></li>
		  <li><a href="change_details.php">Change Details</a></li>
		  <li><a href="find_blood.php">Find Donor</a></li>
		  <?php 
		  	if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
				echo '<li style="background-color: rgba(255,0,0,0.5);"><a href="logout.php">Logout</a></ul>';
			}
		  ?>
		</ul>
	</div>
	<span class="info2" style="left: 40%">REGISTER</span>
	<img class="myFrontPic col-12" src="images/img1.jpg" style="height: 350px;">
</div>
	<div class="col-12" style="overflow: auto; padding: 0 20% 0 20%;">
		<div class="col-12" style="text-align: left; padding: 5%; background-color: rgb(217, 219, 224);">
			<form action="register.php" method="post">
				Username(required)<span style="color: red;">*</span><br>
				<input class="in" type="text" name="username" placeholder="Enter Username" required style="color: black;"><br><br>
				Password(required)<span style="color: red;">*</span><br>
				<input class="in" type="password" name="password" placeholder="Password" required style="color: black;"><br><br>
				Fullname(required)<span style="color: red;">*</span><br>
				<input class="in" type="text" name="fullname" placeholder="Enter Fullname" required style="color: black;"><br><br>
				Date Of Birth(required)<span style="color: red;">*</span><br>
				<input class="in" type="date" name="dob" placeholder="dd/mm/yyyy" required><br><br>
				Gender(required)<span style="color: red;">*</span><br>
				<input type="radio" name="gender" value="male" checked>Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="other">Other<br><br>
				Blood Group(required)<span style="color: red;">*</span><br>
				<select name="bloodgroup" required>
						<option value="">Enter Blood Group</option>
						<option value="A pos">A+</option>
						<option value="A neg">A-</option>
						<option value="B pos">B+</option>
						<option value="B neg">B-</option>
						<option value="O pos">O+</option>
						<option value="O neg">O-</option>
						<option value="AB pos">AB+</option>
						<option value="AB neg">AB-</option>
				</select><br><br>
				Mobile(required)<span style="color: red;">*</span><br>
				<input class="in" type="text" name="mobile" placeholder="Enter Mobile No." pattern="[0-9]{10}" required style="color: black;"><br><br>
				Email(required)<span style="color: red;">*</span><br>
				<input class="in" type="email" name="email" placeholder="Enter Your Email" required style="color: black;"><br><br>
				Town<br>
				<input class="in" type="text" name="town" placeholder="Enter Town" style="color: black;"><br><br>
				State(required)<span style="color: red;">*</span><br>
				<input class="in" type="text" name="state" placeholder="Enter State" required style="color: black;"><br><br>
				<input class="qw" style="font-size: 16px; color: white;" type="submit" value="SEND">
			</form>
		</div>
	</div>

<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;">
	<?php include "footer.php"; ?>
</div>


</body>


</html>