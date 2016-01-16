<?php include 'config.php'; ?>
<?php
$name=$_GET["page"];
$delids=$_GET["ids"];
?>
<?php
if($name == "member"){
$sql="DELETE FROM persons WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: member-list.php?notification=true' );
}
?>
<?php
if($name == "expense"){
	
	$newbal=0;
	$costsel= mysqli_query($conn,"SELECT cost FROM expenses");
	while($row = mysqli_fetch_array($costsel))
	{
		$cost=$row['cost'];
		
		
	}
	$blah= mysqli_query($conn,"SELECT balance FROM budget");
	while($row = mysqli_fetch_array($blah))
	{
		$balance=$row['balance'];
		
		
	}
$newbal=$balance+$cost;

$balup= "UPDATE budget SET balance='$newbal' where id=1";
	$retval = mysqli_query($conn,$balup);
$sql="DELETE FROM expenses WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: expense-list.php?notification=true' );
}
?>
<?php
if($name == "college"){
$sql="DELETE FROM college WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: collegelist.php?notification=true' );
}
?>
<?php

if($name == "registration")
{
$sql="DELETE FROM registration WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: stureport.php?notification=true' );
}
?>
<?php

if($name == "report")
{
$sql="DELETE FROM persons WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: report.php?notification=true' );
}
?>
<?php

if($name == "web")
{
$sql="DELETE FROM web_design WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: webreport.php?notification=true' );
}
?>
<?php

if($name == "quiz")
{
$sql="DELETE FROM quiz WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: quizreport.php?notification=true' );
}
?>
<?php

if($name == "sw")
{
$sql="DELETE FROM swmarket WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: swreport.php?notification=true' );
}
?>
<?php

if($name == "rev")
{
$sql="DELETE FROM rev_coding WHERE id='$delids'";
$result=mysqli_query($conn,$sql);
header( 'Location: revreport.php?notification=true' );
}
?>

<?php
/*
if($name == "government"){
$sql="DELETE FROM government WHERE id='$delids'";
$result=mysql_query($sql);
header( 'Location: government-list.php?notification=true' );
}
?>
<?php
mysql_close($conn);
*/
?>