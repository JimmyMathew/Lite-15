<?php include 'config.php'; ?>
<?php
$name=$_GET["page"];
?>
<?php 

?>
<?php
if($name == "question"){
$qno=$_POST[qno];
$quest=$_POST[quest];
$option1=$_POST[option1];
$option2=$_POST[option2];
$option3=$_POST[option3];
$option4=$_POST[option4];

$right=$_POST[right];
if($right=="option1")
	$right1=$_POST[option1];
else if ($right=="option2")
	$right1=$_POST[option2];
else if ($right=="option3")
	$right1=$_POST[option3];
else if ($right=="option4")
	$right1=$_POST[option4];

	
$event1=$_POST[event1];
if($event1 == "Web Designing")
{
$s="INSERT INTO event1".
 "(id)".
 "VALUES ('$_POST[qno]')";
 $r=mysqli_query($conn,$s);
$sql = "UPDATE event1 SET question='$quest',option1='$option1',option2='$option2',option3='$option3',option4='$option4',correct='$right1',event='$event1' WHERE id=$qno" ;
$retval = mysqli_query($conn,$sql);
 header( 'Location: addquestion.php?notification=true' );
}
else if($event1 == "Quiz")
{
$s="INSERT INTO event2".
 "(id)".
 "VALUES ('$_POST[qno]')";
 $r=mysqli_query($conn,$s);
$sql = "UPDATE event2 SET question='$quest',option1='$option1',option2='$option2',option3='$option3',option4='$option4',correct='$right1',event='$event1' WHERE id=$qno" ;
$retval = mysqli_query($conn,$sql);
 header( 'Location: addquestion.php?notification=true' );
}
else if($event1 == "Reverse Coding")
{
$s="INSERT INTO event3".
 "(id)".
 "VALUES ('$_POST[qno]')";
 $r=mysqli_query($conn,$s);
$sql = "UPDATE event3 SET question='$quest',option1='$option1',option2='$option2',option3='$option3',option4='$option4',correct='$right1',event='$event1' WHERE id=$qno" ;
$retval = mysqli_query($conn,$sql);
 header( 'Location: addquestion.php?notification=true' );
}
else if($event1 == "Software Marketing")
{
$s="INSERT INTO event4".
 "(id)".
 "VALUES ('$_POST[qno]')";
 $r=mysqli_query($conn,$s);
$sql = "UPDATE event4 SET question='$quest',option1='$option1',option2='$option2',option3='$option3',option4='$option4',correct='$right1',event='$event1' WHERE id=$qno" ;
$retval = mysqli_query($conn,$sql);
 header( 'Location: addquestion.php?notification=true' );
}
}
?>
<?php
if($name == "budget")
{
	$amt=$_POST[amt];
	$sql = "UPDATE budget SET amount='$amt',balance='$amt' where id=1";
	$retval = mysqli_query($conn,$sql);
 header( 'Location: budget.php?notification=true' );
	}

	?>
	<?php
if($name == "criteria")
{
session_start();

$c1=$_POST[c1];
$c2=$_POST[c2];
$c3=$_POST[c3];
$c4=$_POST[c4];
$c5=$_POST[c5];
$tot=$c1+$c2+$c3+$c4+$c5;


	$sql = "UPDATE persons SET score='$tot' where id=$_SESSION[idc]";
	$retval = mysqli_query($conn,$sql);
 header( 'Location: mainpoints.php?notification=true' );
	
}
?>
<?php
if($name == "college")
{
	$amt=$_POST[amt];
	$sql = "UPDATE budget SET amount='$amt' where id=1";
	$retval = mysqli_query($conn,$sql);
 header( 'Location: budget.php?notification=true' );
	}

	?>