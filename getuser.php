<!DOCTYPE html>
<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

<?php
require "DB_conn.php";

$q = $_GET['q'];

$sql="SELECT * FROM donors WHERE bloodgroup = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table id='customers'>
<tr>
<th>Name</th>
<th>Blood Group</th>
<th>Mobile</th>
<th>Email</th>
<th>City</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
	$date = strtotime($row['lastdate']);
	$today = time();
	$diff = abs($today - $date);
	if($diff>8035200){
	    echo "<tr>";
	    echo "<td>" . $row['fullname'] . "</td>";
	    echo "<td>" . $row['bloodgroup'] . "</td>";
	    echo "<td>" . $row['mobile'] . "</td>";
	    echo "<td>" . $row['email'] . "</td>";
	    echo "<td>" . $row['town'] . "</td>";
	    echo "</tr>";
	}
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
