<?php
require ("database.php");
session_start();
$_SESSION['user']=$_POST['user']; 
$_SESSION['pic']=$_POST['pic'];
$_SESSION['email']=$_POST['eid'];
$emailid=$_SESSION['email'];
//echo $emailid;
mysqli_select_db($conn,"audit_course");
$sql="SELECT * FROM login WHERE EMAILID ='$emailid'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc())
{
$role=$row['ROLE'];
$_SESSION['role']=$role;
header("Location: role.php");
}
//echo $role;
$_SESSION['role']=$role;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>G-Sign In</title>
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
  height:375px;
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
  			<a class="navbar-brand" href="#" style='font-size: 28px'>Google Sign In</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="navbar-collapse collapse show" id="navbarColor01" style="">
    			<ul class="navbar-nav mr-auto">
	      			<li class="nav-item active">
	        			<a class="nav-link" href="index.php" style='font-size: 20px'>Return <span class="sr-only"></span></a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="about.php" style='font-size: 20px'>About</a>
	     			 </li>
    			</ul>
  			</div>
		</nav>
		<br><br>
		<div class="container">
			  <img src="#" id="pic" align="center">
		      <script type="text/javascript">
		        document.getElementById("pic").src=<?php echo json_encode($_SESSION['pic']); ?>;
		      </script>
		      <br><br>
		      <p id="name" style='color: white; font-size: 30px'>Name: </p>
		      <script type="text/javascript">
		        document.getElementById("name").innerHTML=<?php echo json_encode($_SESSION['user']); ?>; 
		      </script>
		      <br><br>
		      <p id="eid" style='color: white; font-size: 30px'></p>
		      <script type="text/javascript">
		        document.getElementById("eid").innerHTML=<?php echo json_encode($_SESSION['eid']); ?>; 
		      </script>
		</div>
		<h2 align='center' style='color: white; font-size: 30px'>You Do No Belong To This Group</h2>     
		<footer id="footer" style="background-color: #24292e">
      		<p>Copyright KJSCE Audit, &copy; 2019</p>
		</footer>	
    </body>
</html>
<!--
<!DOCTYPE html>
<html>
<head>
	<title>G-SignIn</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
	<img src="collegeplate.jpg" alt="KJSCE" width='100%' height="200"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
	<title>Verify</title>
</head>
<body>
   <nav class="navbar navbar-default">
	  <div class="container">
		<div class="navbar-header">    
		  <a class="navbar-brand">User Profile</a>
		</div>
	  </div>
	</nav>
	<div class="container">
	  <img src="#" id="pic" align="center">
      <script type="text/javascript">
        document.getElementById("pic").src=<?php echo json_encode($_SESSION['pic']); ?>;
      </script>
      <p id="name">nv</p>
      <script type="text/javascript">
        document.getElementById("name").innerHTML=<?php echo json_encode($_SESSION['user']); ?>; 
      </script>
      <p id="eid">nv</p>
      <script type="text/javascript">
        document.getElementById("eid").innerHTML=<?php echo json_encode($_SESSION['eid']); ?>; 
      </script>
      <button onclick="signOut()" class="btn btn-primary">Sign Out</button>
      <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    </div>  
</body>
</html>
-->