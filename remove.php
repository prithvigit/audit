<?php
	require("database.php");
	mysqli_select_db($conn,"audit_course");
    $msg = "";
	$msgClass = "";
	session_start();
	$email=$_SESSION["email"];
	$result = mysqli_query($conn,"SELECT EMAILID FROM student WHERE EMAILID = '$email'");
	$rno=$_SESSION["rno"];
	$fname=$_SESSION["fname"];
	$mname=$_SESSION["mname"];
	$lname=$_SESSION["lname"];
    $query = "DELETE FROM allotment WHERE 1";

		
			if(mysqli_query($conn, $query))
			{
			$msg =  'All Allotments Deleted';
			$_SESSION['message']="$msg";
			$msgClass = 'alert-success';
			header("Location: admin.php");
			}
	    
?>