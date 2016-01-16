<?php

ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=''; // Mysql password 
//$db_name="lite"; // Database name 
$tbl_name="persons"; // Table name 
$conn = mysqli_connect("$host", "$username", "$password",'lite'); 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
;
// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$mytype=$_POST['type'];
// To protect MySQL injection 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword' and type='$mytype'";
$result=mysqli_query($conn,$sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "registration.php"
session_start();
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
	  $_SESSION['id'] = $row['id'];
	   $_SESSION['teamname'] = $row['team'];
	  $_SESSION['type'] = $row['type'];
	 $_SESSION['image'] = $row['photo'];
	  $_SESSION['users'] = $myusername;
	  $_SESSION['pass'] = $mypassword;
  }

header("location:instructions.php");
}
else {
header("location:login.php?login=failure");
}
ob_end_flush();
?>