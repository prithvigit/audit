<?php
	require("database.php");
	mysqli_select_db($conn,"audit_course");
	$msg = "";
	$msgClass = "";
	session_start();
	$email=$_SESSION["email"];
    $c;
	if(filter_has_var(INPUT_POST, "submit"))
	{
		$c_id = htmlspecialchars($_POST["c_id"]);
		$cname = htmlspecialchars($_POST["cname"]);
		$dept=htmlspecialchars($_POST["dept"]);
		$sem=htmlspecialchars($_POST["sem"]);
        $min = htmlspecialchars($_POST["min"]);
		$max = htmlspecialchars($_POST["max"]);
	$query = "INSERT INTO course(ID,NAME,sem,DEPT,MIN,MAX) VALUES('$c_id','$cname','$sem','$dept','$min','$max')";
	if(mysqli_query($conn, $query))
			{

			$msg =  'Course Added';
			$msgClass = 'alert-success';
			$_SESSION['message'] = 'Course Added';
			$_SESSION['messageclass'] ="$msgclass";
			header("Location: admin.php");
			} 
			else 
			{
		    $error=	"Course Already Exists";	
			$msg =  "$error";
			$msgClass = 'alert-danger';
			$_SESSION['message'] = "$msg";
			$_SESSION['messageclass'] ="$msgclass";
			header("Location: admin.php");	
			}
	}
?>
<!DOCTYPE html>
<html>
    <head>
		<head>
			<title>Admin</title>
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
  height:775px;
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
  			<a class="navbar-brand" href="admin.php" style='font-size: 28px'>Administrator</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="navbar-collapse collapse show" id="navbarColor01" style="">
    			<ul class="navbar-nav mr-auto">
     				<li class="nav-item active">
        				<a class="nav-link" href="admin.php" style='font-size: 20px'>Home <span class="sr-only">(current)</span></a>
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
			<div class="container">
				<div class="row">
			       <div class="col-md-3">
					    <div class="list-group">
			              	<a href="admin.php" class="list-group-item active main-color-bg">
			                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
		              		</a>
			               	<a href="admin.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true" class="active"></span>  Profile <span class="badge"></span></a>
			              	<a href="add.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Add Course <span class="badge"></span></a>
			              	<a href="allocate.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Allocate Courses <span class="badge"></span></a>
			              	<a href="remove.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Delete Allocation <span class="badge"></span></a>
			              	<a href="displayadmin.php" class="list-group-item"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Display Allocation<span class="badge"></span></a> 		
			    		</div>
					</div>
					<div class="col-md-8">
						<?php if($msg != ''): ?>
		    			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
			    		<?php endif; ?>	
						<form name=myForm method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div class="panel panel-default form-panel" >
						 		<div class="panel-body">
							  		<fieldset>
							    		<div class="form-group">
							    			<div class="panel-heading main-color-bg" align="center" style="font-size: 28px; color: white">
								    		Enter Course Details
								    		</div>
							  				<label for="c_id" style='font-size: 18px'>Course ID:</label>
											<input type="text" name="c_id" id="c_id" class="form-control" placeholder="Enter Unique Course ID" value="<?php echo isset($_POST['c_id']) ? $c_id : ''; ?>" required>
											<br>
											<label for="cname" style='font-size: 18px'>Course Name:</label>
											<input type="text" name="cname" id="cname" class="form-control" placeholder="Enter Unique Course Name" value="<?php echo isset($_POST['cname']) ? $cname : ''; ?>" required>
											<br>
											<label for="sem">Semester</label>
											<select name="sem" class=form-control required>
											<option value= >None</option>
  											<option value="3">3</option>
  											<option value="4">4</option>
  											<option value="5">5</option>
  											</select> 
											<br>
											<label for="dept" style='font-size: 18px'>Department:</label>
											<?php
											$sql="SELECT DEPT FROM hod";
											echo "<select name=dept  id=dept class=form-control required> "; 
										  	echo"<option value= >None</option>";
											foreach ($conn->query($sql) as $row)
											{
												echo "<option value=$row[DEPT] >$row[DEPT]</option>"; 
											}
											echo "</select>";
										    ?>
											<br>
											<label for="min" style='font-size: 18px'>Minimum Intake:</label>
											<input type="text" name="min" id="min" class="form-control" placeholder="Enter Minimum Capacity" value="<?php echo isset($_POST['min']) ? $min : ''; ?>" required>
											<br>
											<label for="max" style='font-size: 18px'>Maximum Intake:</label>
											<input type="text" name="max" id="max" class="form-control" placeholder="Enter Maximum Capacity" value="<?php echo isset($_POST['max']) ? $max : ''; ?>" required>
											<br>
							    		</div>
							    		<button type="submit" name="submit" class="btn btn-primary" style="float:right !important">Submit</button>
							  		</fieldset>
				 				</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer" style="background-color:#24292e ">
				      <p>Copyright KJSCE Audit, &copy; 2019</p>
		</footer>
	</body>
</html>	