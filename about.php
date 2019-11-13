<?php
    $msg = "";
	$msgClass = "";
    require ("database.php");
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>About</title>
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
  height:425px;
  width:100%;
  background: #24292e !important;
}
</style>
	</head>	
	<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  			<a class="navbar-brand" href="admin.php" style='font-size: 28px'>Administrator</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="navbar-collapse collapse show" id="navbarColor01" style="">
    			<ul class="navbar-nav mr-auto">
     				<li class="nav-item active">
        				<a class="nav-link" href="index.php" style='font-size: 20px'>Home <span class="sr-only">(current)</span></a>
      				</li>
				    <li class="nav-item">
				        <a class="nav-link" href="about.php" style='font-size: 20px'>About</a>
				    </li>
		    	</ul>
		  	</div>
		  	<div class="collapse navbar-collapse" id="navbarColor02">
		  	</div>
		</nav>
<br>
<br>

<section id="main">
  <div class = "container">
    <div class="row">
         <!-- <div class="col-md-3">
		            <div class="list-group">
		              <a href="faculty.php" class="list-group-item active main-color-bg">
		                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
		              </a>
		                  	<form action="display.php" method="post">

		              <a href="export.php" class="list-group-item"><span class="glyphicon glyphicon-th-list"  name="export" value="export" aria-hidden="true"> Export<span class="badge"></span></a>
		            	
		            </form>
		    		</div>
					</div>-->
					 <div class="col-md-3">
		            </div>
    	
	    <?php
	
	$query="SELECT * FROM course ";
    $result = mysqli_query($conn,$query);
    echo"<table border=3>";
			        echo"<tr><td>ID</td><td>NAME</td><td>SEM</td><td>  DEPARTMENT</td><td>MAX INTAKE</td></tr>";
			        while ($row = $result->fetch_assoc())
			        {
			            echo"<tr class='table-dark'><td>{$row['ID']}</td><td>{$row['NAME']}</td><td>{$row['sem']}</td><td>{$row['DEPT']}</td><td>{$row['MAX']}</tr>";
			        }
			        echo"</table>";
				
			
  ?>	
	</body>
</html>














































<!--


<!DOCTYPE html>
<html>
    <head>
		<title>About</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cyborg/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<div class = "row">
			<div class ="col-md-2">
				<img src="Somaiya.png" alt="Somaiya" width="250" height="100"/>
			</div>
			<div class ="col-md-8 offset-md-0">	
				<h2 align="center" style='color: white; font-size: 50px'>K.J. Somaiya College of Engineering</h2>
				<h4 align="center" style='font-size: 30px'><font color="white">(Autonomous College affiliated to University of Mumbai)</font></h4>
			</div>	
		</div>
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="google-signin-client_id" content="444425785443-5mh44gn88jrf46t217t7i4m62r4ui1ro.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script type="text/javascript">
		</script>
	</head>
    <body>

    	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  	<a class="navbar-brand" href="index.php" style='font-size: 28px'>Audit Course</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  <div class="navbar-collapse collapse show" id="navbarColor01" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style='font-size: 20px'>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" style='font-size: 20px'>About</a>
      </li>
    </ul>
  </div>
</nav>
<?php
	
	$query="SELECT * FROM course ";
    $result = mysqli_query($conn,$query);
    echo"<table border=3>";
			        echo"<tr><td>ID</td><td>NAME</td><td>SEM</td><td>DEPT</td><td>MAX</td></tr>";
			        while ($row = $result->fetch_assoc())
			        {
			            echo"<tr><td>{$row['ID']}</td><td>{$row['NAME']}</td><td>{$row['sem']}</td><td>{$row['DEPT']}</td><td>{$row['MAX']}</tr>";
			        }
			        echo"</table>";
				
			
  ?>
		<br>
		<br>
		<section id="main">
		  	<div class = "container">
		    	
			</div>
		</section>
		<footer id="footer" style="background-color: #24292e">
      		<p>Copyright KJSCE Audit, &copy; 2019</p>
		</footer>
	</body>
</html>	
