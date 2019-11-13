<?php    
$connect = mysqli_connect("localhost", "root", "123456", "audit_course");
session_start();
$role=$_SESSION["role"];
$output = '';

if($role=="admin")
$sql="SELECT * FROM allotment ORDER BY CID ASC";
elseif ($role=="hod") 
{
$depthod=$_SESSION["dept"];
$sql="SELECT NAME FROM course WHERE dept='$depthod'";
$result = mysqli_query($connect,$sql);
$i=0;
while($row = mysqli_fetch_array($result))
{$courses[$i]=$row['NAME'];
$i++;
}
}
elseif ($role=="faculty") 
{
$cname=$_SESSION['CNAME'];
$sql="SELECT * FROM allotment WHERE CNAME='$cname'";
}

$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result) > 0)
 {
if($role=="hod")
{
foreach($courses as $c)
{
//echo"$c";
//echo"<br><br>";
$output .= '<?php echo"$c";?>
   <br><br>
   <table class="table" bordered="1">  
                    <tr>  
         <td>FNAME</td>  
         <td>MNAME</td>  
         <td>LNAME</td>  
         <td>RNO</td>  
         <td>EMAILID</td>
         <td>CNAME</td>
          <td>Attendance</td>
                    </tr>
  ';
$query="SELECT * FROM allotment where CNAME='$c'";
$result = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <tr>  
         <td>'.$row["FNAME"].'</td>  
         <td>'.$row["MNAME"].'</td>  
         <td>'.$row["LNAME"].'</td>  
         <td>'.$row["RNO"].'</td>  
         <td>'.$row["EMAILID"].'</td>
         <td>'.$row["CNAME"].'</td>

       </tr>  
   ';
  }
  echo "<br>";
}
$output .= '</table>';
header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=display.xls');
echo $output;
}
else
{ $output .= '
   <table class="table" bordered="1">  
                    <tr>  
         <td>FNAME</td>  
         <td>MNAME</td>  
         <td>LNAME</td>  
         <td>RNO</td>  
         <td>EMAILID</td>
         <td>CNAME</td>
       <td>Attendance</td>
                    </tr>
  ';
  
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <tr>  
         <td>'.$row["FNAME"].'</td>  
         <td>'.$row["MNAME"].'</td>  
         <td>'.$row["LNAME"].'</td>  
         <td>'.$row["RNO"].'</td>  
         <td>'.$row["EMAILID"].'</td>
         <td>'.$row["CNAME"].'</td>

       </tr>  
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=display.xls');
  echo $output;
 }
}
//echo "string";
//header("Location: display.php");
?>
