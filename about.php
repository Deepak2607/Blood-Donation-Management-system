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
		  <li><a class="active" href="about.php">About</a></li>
		  <li><a href="contact.php">Contact</a></li>
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
	<span class="info2" style="left: 39%">ABOUT US</span>
	<img class="myFrontPic col-12" src="images/img2.jpg" style="height: 350px;">
</div>
	<div style="margin: 0; padding: 2% 5% 2% 5%; text-align: center; overflow: auto;">
		<div style="border-left: 5px solid rgba(82, 127, 99,1.0);"><blockquote>
		<h3><i>Whenever you see a successful business, someone once made a courageous decision.</i> ~Peter F. Drucker</h3>
		</blockquote></div><br>
		<p style="color: rgb(116, 118, 122); text-align: left;">We are student of ABV-IIITM GWALIOR . This portal had been developed to bring technology to help humanity . We tried to use best contemporary technologies in delivering a promising web portal to bring together all the blood donors in Gwalior, thereby fulfilling every blood request in our city.</p>
		<h4 style="color: rgb(116, 118, 122); text-align: center;">Why blood donation</h4>
		<p style="color: rgb(116, 118, 122); text-align: left;">Blood donation is a major concern to the society as donated blood is lifesaving for individuals who need it. Blood is scarce. There is a shortage to active blood donors to meet the need of increased blood demand. Blood donation as a therapeutic exercise. Globally, approximately 80 million units of blood are donated each year.</p>
		<p style="color: rgb(116, 118, 122); text-align: left;"> One of the biggest challenges to blood safety particularly is accessing safe and adequate quantities of blood and blood products. Safe supply of blood and blood components is essential, to enable a wide range of critical care procedures to be carried out in hospitals. Good knowledge about blood donation practices is not transforming in donating blood. Interactive awareness on blood donation should be organized to create awareness and opportunities for blood donation. Blood donation could be therefore recommended that voluntary blood donations as often as possible may be therapeutically beneficial to the donors in terms of thrombotic complications and efficient blood flow mechanisms. This is also a plus for blood donation campaigns.</p><br><br><hr style="border-style: dotted; border-color: rgb(158, 161, 168); border-width: 1px 0 0 0;"><br>
		<h1>LOCATION</h1><br>
		<div class="col-12" style="padding: 0 30% 0 30%;">
			<div class="polaroid">
				<img class="col-12" src="images/img14.jpg" alt="Gwalior">
				<div class="container">
					<p>ABV-Indian Institute of Information Technology &#38 Management, Gwalior</p>
				</div>
			</div>
		</div>
		<br>
	</div>


<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;">
	<?php include "footer.php"; ?>
</div>


</body>


</html>