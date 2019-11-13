<?php
require ("database.php");
session_start();
$role=$_SESSION['role'];
if($role=='student')
{
	header("Location: student.php");
}
else if($role=='faculty')
{
	header("Location: faculty.php");
}
else if($role=='hod')
{
	header("Location: hod.php");
}
else if($role=='admin')
{
	header("Location: admin.php");
}
else
{
	echo "Login Successful";
}
?>