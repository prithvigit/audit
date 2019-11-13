<?php
require("database.php");
mysqli_select_db($conn,"audit_course");
session_start();
$email=$_SESSION["email"];
$role=$_SESSION["role"];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Faculty</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cyborg/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css?version=51">
		<div class = "row">
			<div class ="col-md-2">
				<br>
				<img src="Somaiya.png" alt="Somaiya" width="250" height="100"/>
			</div>
			<div class ="col-md-7 offset-md-0">	
				<h2 align="right" style='color: white; font-family:"Arial, Helvetica, sans-serif"; font-size: 50px'>K.J. Somaiya College of Engineering</h2>
				<h4 align="center" style='font-family:"Arial, Helvetica, sans-serif"; font-size: 30px'><font color="white">(Autonomous College affiliated to University of Mumbai)</font></h4>
			</div>	
			<div class ="col-md-3">
				<br>
				<a href="https://www.facebook.com/SomaiyaTrust/" class="fa fa-facebook"></a>
				<a href="https://twitter.com/SomaiyaTrust" class="fa fa-twitter"></a>
				<a href="https://www.youtube.com/SomaiyaVidyavihar" class="fa fa-youtube"></a>
				<a href="https://www.instagram.com/somaiyatrust/" class="fa fa-instagram"></a>
			</div>
		</div>
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="google-signin-client_id" content="444425785443-5mh44gn88jrf46t217t7i4m62r4ui1ro.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script type="text/javascript">
	
	function signOut() 
	{
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () 
	    {
	      alert('User signed out.');
	      document.location.href = 'index.php';

	    });
  	}
   function onLoad() 
   {
	      gapi.load('auth2', function() 
	      {
	        gapi.auth2.init();
	        
	      });
    }
		</script>
	<style>
 
body{    
    font-family: "Arial Black", Gadget, sans-serif;
    overflow-x: hidden;
    
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

#particles-js{
  position: absolute;
  height:625px;
  width:100%;
  background: #24292e !important;
}
</style>
	</head>	
	<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  			<a class="navbar-brand" href="faculty.php" style='font-size: 28px'>Faculty</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="navbar-collapse collapse show" id="navbarColor01" style="">
    			<ul class="navbar-nav mr-auto">
     				<li class="nav-item active">
        				<a class="nav-link" href="faculty.php" style='font-size: 20px'>Home <span class="sr-only">(current)</span></a>
      				</li>
				    <li class="nav-item">
				        <a class="nav-link" href="about.php" style='font-size: 20px'>About</a>
				    </li>
		    	</ul>
		  	</div>
		  	<div class="collapse navbar-collapse" id="navbarColor02">
		      	<button onclick="window.location.href='index.php'"  type="submit" name="logout" class="btn btn-default ml-auto mr-1">Log Out</button>
		  	</div>
		</nav>
<br>
<br>

<section id="main">
  <div class = "container">
    <div class="row">
          <div class="col-md-3">
		            <div class="list-group">
		              <a href="faculty.php" class="list-group-item active main-color-bg">
		                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
		              </a>
		               <a href="faculty.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true" class="active"></span> Profile <span class="badge"></span></a>
		                  	<form action="displayfaculty.php" method="post">
		                  		<a href="displayfaculty.php" class="list-group-item"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Display Allocation<span class="badge"></span></a>

		              <a href="export.php" class="list-group-item"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Export<span class="badge"></span></a>
		            	
		            </form>
		    		</div>
					</div>
					<body>
    	<form action="displayfaculty.php" method="post">
    	<select name='option1' id='option1' >
	    <?php 
	    
	      $cname=$_SESSION['CNAME'];
	    	$sql="SELECT * FROM course WHERE NAME='$cname' ";
	    $result=$conn->query($sql);
	    echo"<table class='table table-hover' border=5>";
	        echo"<tr><td><b>FNAME</b></td><td><b>MNAME</b></td><td><b>LNAME</b></td><td><b>RNO</b></td><td><b>EMAILID</b></td><td><b>CID</b></td><td><b>CNAME<b></td></tr>";
	        while ($row = $result->fetch_assoc())
	        {
	            echo"<tr class='table-dark'><td>{$row['FNAME']}</td><td>{$row['MNAME']}</td><td>{$row['LNAME']}</td><td>{$row['RNO']}</td><td>{$row['EMAILID']}</td><td>{$row['CID']}</td><td>{$row['CNAME']}</td></tr>";
	        }
	    
	     echo"</table>";

	
        echo "<label for='option1'>COURSE :</label>"; 
        echo"<option value= >None</option>";
        foreach ($conn->query($sql) as $row)
        {
        echo "<option name=$row[NAME] value=$row[NAME]>$row[NAME]</option>"; 
        }
        echo "</select>";
        ?>
        </select>
        <input type="submit" name="search" value="Go" class="btn btn-primary">
        <button input type="submit" name="submit" value="submit" class="btn btn-primary">Show All</button><br><br>
        <?php
			
		        if(isset($_POST['search']))
				{
				    //$valueToSearch = $_POST['option1'];
				    //$_SESSION["x"]=$valueToSearch;
				    //$x=implode("",$_POST);
				    $query = "SELECT * FROM allotment WHERE CNAME='$cname'";
				    $search_result = filterTable($query);
				    $result=$conn->query($query);
				    $_SESSION["x"]=$search_result;
			        echo"<table class='table table-hover' border=1>";
			        echo"<tr><td><b>FNAME</b></td><td><b>MNAME</b></td><td><b>LNAME</b></td><td><b>RNO</b></td><td><b>EMAILID</b></td><td><b>CID</b></td><td><b>CNAME</b></td></tr>";$i=0;
			        while ($row = $result->fetch_assoc())
			        {
			            echo"<tr class='table-dark'><td>{$row['FNAME']}</td><td>{$row['MNAME']}</td><td>{$row['LNAME']}</td><td>{$row['RNO']}</td><td>{$row['EMAILID']}</td><td>{$row['CID']}</td><td>{$row['CNAME']}</td></tr>";
			        }
			        echo"</table>";
		    	}
		 		else if(isset($_POST['submit']))
		 		{
			     	$sql="SELECT * FROM allotment WHERE CNAME='$cname'";
			    	$result = mysqli_query($conn,$sql);
			    	$i=0;
			     	echo"<table class='table table-hover' border=1>";
			        echo"<tr><td><b>FNAME</b></td><td><b>MNAME</b></td><td><b>LNAME</b></td><td><b>RNO</b></td><td><b>EMAILID</b></td><td><b>CID</b></td><td><b>CNAME</b></td></tr>";
			            while ($row = $result->fetch_assoc())
			        {
			            echo"<tr class='table-dark'><td>{$row['FNAME']}</td><td>{$row['MNAME']}</td><td>{$row['LNAME']}</td><td>{$row['RNO']}</td><td>{$row['EMAILID']}</td><td>{$row['CID']}</td><td>{$row['CNAME']}</td></tr>";
			        }
		            echo"</table>";
		            echo"<br>";
		        }
			


			function filterTable($query)
			{
		    $connect = mysqli_connect("localhost", "root", "123456", "audit_course");
		    $filter_Result = mysqli_query($connect, $query);
		    return $filter_Result;
			}

		?>
		</form>
	</body>
</html>

