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
		  <li><a href="change_details.php">Change Details</a></li>
		  <li><a class="active" href="find_blood.php">Find Donor</a></li>
		  <?php 
		  	if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
				echo '<li style="background-color: rgba(255,0,0,0.5);"><a href="logout.php">Logout</a></ul>';
			}
		  ?>
		</ul>
	</div>
	<span class="info2" style="left: 36%">FIND BLOOD</span>
	<img class="myFrontPic col-12" src="images/img15.jpg" style="height: 350px;">
</div>
	<div style="margin: 0; padding: 0 3% 0 7%; text-align: center;">
		<div class="col-11" style="background-color: rgba(82, 127, 99,0.5); padding: 0">
			<div style="background-color: rgb(158, 242, 113);overflow: auto;width: 100%; padding: 5px;">
				<form>
					<label><p style="font-size: 20px; color: #bb0000;">Select your blood group:</p></label>
					<select name="bloodgroup" onchange="showUser(this.value)" id="sel">
						<option value="">Enter Blood Group</option>
						<option value="A pos">A+</option>
						<option value="A neg">A-</option>
						<option value="B pos">B+</option>
						<option value="B neg">B-</option>
						<option value="O pos">O+</option>
						<option value="O neg">O-</option>
						<option value="AB pos">AB+</option>
						<option value="AB neg">AB-</option>
					</select>
				</form>
			</div>
			<div id="txtHint" style="padding: 5% 0 5% 0; width: 100%; overflow: auto;"></div>
		</div>
	</div>


<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;">
	<?php include "footer.php"; ?>
</div>



<?php
	if(isset($_GET)){
		$a=$_GET["bloodgroup"];
	}else{
		$a="";
	}
?>




<script>


window.onload=function(){
	var val='<?php echo $a;?>';
	var sel = document.getElementById('sel');
	var opts=sel.options;
	for (var opt, j = 0; opt = opts[j]; j++) {
	    if (opt.value == val) {
	    	sel.selectedIndex = j;
	    	break;
	    }
	} 
	var va='<?php echo $a;?>';
	showUser(va);
}

</script>

</body>


</html>