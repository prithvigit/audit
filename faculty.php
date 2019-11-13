<?php
    $msg = "";
	$msgClass = "";
	require ("database.php");
	session_start();
	$sql="SELECT * FROM faculty WHERE EMAILID ='{$_SESSION['email']}'";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) 
	{
		$email= $row['EMAILID'];
		$fname=$row['FNAME'];
		$mname=$row['MNAME'];
		$lname=$row['LNAME'];
		$dept=$row['DEPT'];
		$post=$row['POST'];
		$edu=$row['EDUCATION'];
		$course=$row['COURSE'];
		$_SESSION['CNAME']=$course;
	}
	$sql="SELECT ALLOTED FROM course WHERE NAME ='$course'";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) 
	{$no_of_students=$row['ALLOTED'];}
	$conn->close();
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



<div id="particles-js">
		<canvas class="particles-js-canvas-el"  style="width: 100%; height: 100%;"></canvas>
			<script type="text/javascript" src="particles.js"></script>
			<script type="text/javascript" src="app.js"></script>
		</div>
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
		              <a href="displayfaculty.php" class="list-group-item"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Display Allocation<span class="badge"></span></a>
		            		
		    		</div>
					</div>
		 


				<div class="col-md-9">
				<div class="panel panel-default">
			          <div class="panel-heading main-color-bg">
			            <h3 class="panel-title">You are logged in as<b> <?php  print $email;?></b></h3>
			          </div>
			          <div class="panel-body">
			            <div class="col-md-9">
			              
			                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Name : <b> <?php  print $fname." ".$mname." ".$lname;?></b></h2>
			                <h3><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Department :<b> <?php  print $dept;?></h3></b>

			                <h3><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Post :<b> <?php  print $post;?></b></h3>
			                <h3><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Education :<b> <?php  print $edu;?></b></h3>
			                <h3><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Audit Course :<b> <?php  print $course;?></b></h3>

			                <h3><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Students enrolled in Course :<b> <?php  print $no_of_students;?></b></h3>
		
			             </h3></div>  
			        </div>
			    </div>
			    </div>
    </div> 
 </div>
</section>
<footer id="footer" style="background-color: #24292e">
      <p>Copyright KJSCE Audit, &copy; 2019</p>
</footer>
		
    </body>
</html>
<!--
<!DOCTYPE html>
    <html>
    <head>
		<title>Faculty</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
		<img src="collegeplate.jpg" alt="KJSCE" width="100%" height="200"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
    <body>
		<nav class="navbar navbar-default">
		 <div class="container">
		 <div class="navbar-header">    
		 <a class="navbar-brand">Faculty Details</a>
		 <button onclick="window.location.href='index.php'"  type="submit" name="logout" class="btn btn-primary">LOG OUT</button>
		 </div>
		 </div>
		 </nav>
		 <div class="container">
		 <?php if($msg != ''): ?>
    	 <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>
		<h5>You are logged in as<b> <?php  print $email;?><h5></b></h5>
		<br><br>
		<h5>Name : <b> <?php  print $fname." ".$mname." ".$lname;?><h5></b></h5>
		<br><br>
		<h5>Department :<b> <?php  print $dept;?><h5></b></h5><br><br>
		<h5>Post :<b> <?php  print $post;?><h5></b></h5>
		<br><br>
		<h5>Education :<b> <?php  print $edu;?><h5></b></h5>
		<br><br>
		<h5>Course :<b> <?php  print $course;?><h5></b></h5>
		<br><br>
		<h5>Students enrolled in course :<b> <?php  print $no_of_students;?><h5></b></h5>
		<br>
		<button onclick="window.location.href='display.php'"  type="submit" name="allocate" class="btn btn-primary">Display Student List</button>
	</body>
</html>	