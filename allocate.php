<?php
    $msg = "";
    $msgClass = "";
    require ("database.php");
    session_start();
    $sql="UPDATE course SET ALLOTED=0";
    $result = $conn->query($sql);
    $i=1;
    $sql="SELECT * FROM student ORDER BY TIME asc";
    $result = $conn->query($sql);
    next:
    while ($row = $result->fetch_assoc()) 
    {
    $email= $row['EMAILID'];
    $fname=$row['FNAME'];
    $mname=$row['MNAME'];
    $lname=$row['LNAME'];
    $rno=$row['RNO'];
    $pref1=$row['PREF1'];
    $pref2 =$row['PREF2'];
    $pref3 =$row['PREF3'];
    $query="SELECT MAX,ID,NAME,ALLOTED FROM course WHERE ID='$pref1' ";
    $resultx = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($resultx))
    { 
      $x=$row['ALLOTED'];
      $c_id=$row['ID'];
      $cname=$row['NAME'];
      if($row['MAX']<=$row['ALLOTED'])
      {
      }
      else
      {
        $query0="INSERT INTO allotment(FNAME,MNAME,LNAME,RNO,EMAILID,CNAME,CID) VALUES('$fname','$mname','$lname','$rno','$email','$cname','$c_id')";
        if(mysqli_query($conn,$query0))
        {
          $msgClass = 'alert-success';
          $_SESSION['message'] = 'Courses Allocated';
          $_SESSION['messageclass'] ="$msgclass";  
        }
        else
        {
          $msgClass = 'alert-danger';
          $_SESSION['message'] = 'Courses Already Allocated';
          $_SESSION['messageclass'] ="$msgclass";
        }
        $query1="UPDATE course SET ALLOTED='$x'+1 WHERE ID='$c_id'";
        if(mysqli_query($conn, $query1))
        {}
        else
        {
        echo mysqli_error($conn);
        }
        goto next;
      }
    }
    $query="SELECT MAX,ID,NAME,ALLOTED FROM course WHERE ID='$pref2' ";
    $resultx = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($resultx))
    { 
        $x=$row['ALLOTED'];
        $c_id=$row['ID'];
        $cname=$row['NAME'];
        if($row['MAX']<=$row['ALLOTED'])
        {}
        else
        {
          $query0="INSERT INTO allotment(FNAME,MNAME,LNAME,RNO,EMAILID,CNAME,CID) VALUES('$fname','$mname','$lname','$rno','$email','$cname','$c_id')";
          if(mysqli_query($conn,$query0))
          {
            $msgClass = 'alert-success';
            $_SESSION['message'] = 'Courses Allocated';
            $_SESSION['messageclass'] ="$msgclass";;
          }
          else
          {          
            $msgClass = 'alert-danger';
            $_SESSION['message'] = 'Courses Already Allocated';
            $_SESSION['messageclass'] ="$msgclass";
          }
          $query1="UPDATE course SET ALLOTED='$x'+1 WHERE ID='$c_id'";
          if(mysqli_query($conn, $query1))
          {}
          else
          {
          echo mysqli_error($conn);
          }
          goto next;
        }
    }
    $query="SELECT MAX,ID,NAME,ALLOTED FROM course WHERE ID='$pref3' ";
    $resultx = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($resultx))
    {
        $x=$row['ALLOTED'];
        $c_id=$row['ID'];
        $cname=$row['NAME'];
        if($row['MAX']<=$row['ALLOTED'])
        {}
        else
        {
          $query0="INSERT INTO allotment(FNAME,MNAME,LNAME,RNO,EMAILID,CNAME,CID) VALUES('$fname','$mname','$lname','$rno','$email','$cname','$c_id')";
          if(mysqli_query($conn,$query0))
          {
            $msgClass = 'alert-success';
            $_SESSION['message'] = 'Courses Allocated';
            $_SESSION['messageclass'] ="$msgclass";
          }
          else
          { 
            $msgClass = 'alert-danger';
            $_SESSION['message'] = 'Courses Already Allocated';
            $_SESSION['messageclass'] ="$msgclass";
          }
          $query1="UPDATE course SET ALLOTED='$x'+1 WHERE ID='$c_id'";
          if(mysqli_query($conn, $query1))
          {}
          else
          {
          echo mysqli_error($conn);
          }
          goto next;
        }
    } 
    }
    header("Location: admin.php");
    $conn->close();
?>
<!DOCTYPE html>
<html>
  <head>
		<title>Admin</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <div class = "row">
      <div class ="col-md-2">
        <img src="Somaiya.png" alt="Somaiya" width="250" height="100"/>
      </div>
      <div class ="col-md-8 offset-md-0"> 
        <h2 align="center" style='color: white; font-size: 50px'>K.J. Somaiya College of Engineering</h2>
        <h4 align="center" style='font-size: 30px'><font color="white">(Autonomous College affiliated to University of Mumbai)</font>
        </h4>
      </div>  
    </div>
	</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Course Allocation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>

    </div>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <button onclick="window.location.href='index.php'"  type="submit" name="logout" class="btn btn-default ml-auto mr-1">Log Out</button>
    </div>
  </nav>
  <section id="main">
    <div class = "container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="admin.php" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
            </a>
             <a href="admin.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true" class="active"></span>  Profile <span class="badge"></span></a>
            <a href="add.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Add Course <span class="badge"></span></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Allocate Course <span class="badge"></span></a>
            <a href="displayadmin.php" class="list-group-item"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Display Allocation<span class="badge"></span></a>
                  
          </div>
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
                <?php if($msg != ''): ?>
                <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                 <?php endif; ?>
                                        <!--
                                        <h5>You are logged in as<b> <?php  print $email;?><h5></b></h5>
                                        <br><br>
                                        <h5>Name : <b> <?php  print $fname." ".$mname." ".$lname;?><h5></b></h5>
                                        <br><br>
                                        <h5>Department :<b> <?php  print $rno;?><h5></b></h5>
                                        <br><br>
                                        <h5>Courses : <b> <?php $i="1";
                                        echo "<br>";
                                        echo "&nbsp&nbsp&nbsp CODE&nbsp&nbsp&nbsp&nbsp&nbsp &nbspNAME";
                                        echo "<br>";
                                        //print_r($courses);
                                        foreach($email as $c)//=>$id )
                                        {echo $c."<br>";
                                        $i++;            }
                                        ?><h5></b></h5>
                                        <br><br>
                                        -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	
  <footer id="footer" style="background-color:#24292e ">
      <p>Copyright KJSCE Audit, &copy; 2019</p>
  </footer>
</body>
</html>	