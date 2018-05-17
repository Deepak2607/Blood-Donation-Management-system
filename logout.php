<?php
session_start();
session_destroy();
header("location: change_details.php");
?>