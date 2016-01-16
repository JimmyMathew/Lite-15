<?php include 'config.php'; ?>
<?php
$name=$_GET["page"];

?>
<?php

session_start();
?>
<?php
if($name == "member")
{
/*define ('MAX_FILE_SIZE', 1024 * 768);

if (array_key_exists('upload', $_POST)) 
{
  // define constant for upload folder
  define('UPLOAD_DIR', 'member/');
  // replace any spaces in original filename with underscores
  $file = str_replace(' ', '_', time()."_".$_FILES['phototxt']['name']);
  // create an array of permitted image types
  $permitted = array('image/gif', 'image/jpeg', 'image/pjpeg',
'image/png');
  
  // upload if file is OK
  if (in_array($_FILES['phototxt']['type'], $permitted)
      && $_FILES['phototxt']['size'] > 0 
      && $_FILES['phototxt']['size'] <= MAX_FILE_SIZE) {
    switch($_FILES['phototxt']['error']) {
      case 0:
        // check if a file of the same name has been uploaded
        if (!file_exists(UPLOAD_DIR . $file)) {
          // move the file to the upload folder and rename it
          $success =
move_uploaded_file($_FILES['phototxt']['tmp_name'], UPLOAD_DIR .
$file);
        } else {
          echo $result = 'A file of the same name already exists.';
        }
        if ($success) {
          echo $result = "$file uploaded successfully.";
        } else {
          echo $result = "Error uploading $file. Please try again.";
        }
        break;
      case 3:
      case 6:
      case 7:
      case 8:
        echo $result = "Error uploading $file. Please try again.";
        break;
      case 4:
        echo $result = "You didn't select a file to be uploaded.";
    }
  } else {
    echo $result = "$file is either too big or not an image.";
  }
}*/

$sql = "INSERT INTO persons".
"(team,type,username,password)".

 "VALUES (' $_POST[nametxt]','$_POST[type]','$_POST[un]','$_POST[pw]')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: add-member.php?notification=true' );
}

?>
<?php
if($name == "student"){

$sql = "INSERT INTO registration".
 "(name,college,email,mobile,event1,event2)".
 "VALUES (' $_POST[nametxt]','$_POST[colltxt]','$_POST[email]','$_POST[mobile]','$_POST[event1]','$_POST[event2]')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: registration.php?notification=true' );
	  
}
?>
<?php
if($name == "expense")
{
define ('MAX_FILE_SIZE', 1024 * 768);

if (array_key_exists('upload', $_POST)) 
{
  // define constant for upload folder
  define('UPLOAD_DIR', 'employee/');
  // replace any spaces in original filename with underscores
  $file = str_replace(' ', '_', time()."_".$_FILES['phototxt']['name']);
  // create an array of permitted image types
  $permitted = array('image/gif', 'image/jpeg', 'image/pjpeg',
'image/png');
  
  // upload if file is OK
  if (in_array($_FILES['phototxt']['type'], $permitted)
      && $_FILES['phototxt']['size'] > 0 
      && $_FILES['phototxt']['size'] <= MAX_FILE_SIZE) {
    switch($_FILES['phototxt']['error']) {
      case 0:
        // check if a file of the same name has been uploaded
        if (!file_exists(UPLOAD_DIR . $file)) {
          // move the file to the upload folder and rename it
          $success =
move_uploaded_file($_FILES['phototxt']['tmp_name'], UPLOAD_DIR .
$file);
        } else {
          echo $result = 'A file of the same name already exists.';
        }
        if ($success) {
          echo $result = "$file uploaded successfully.";
        } else {
          echo $result = "Error uploading $file. Please try again.";
        }
        break;
      case 3:
      case 6:
      case 7:
      case 8:
        echo $result = "Error uploading $file. Please try again.";
        break;
      case 4:
        echo $result = "You didn't select a file to be uploaded.";
    }
  } else {
    echo $result = "$file is either too big or not an image.";
  }
}

$cost=$_POST[cost];
	$newbal=0;
	$result = mysqli_query($conn,"SELECT balance FROM budget");
	while($row = mysqli_fetch_array($result))
	{
		$balance=$row['balance'];
		
		
	}
$newbal=$balance-$cost;

$balup= "UPDATE budget SET balance='$newbal' where id=1";
	$retval = mysqli_query($conn,$balup);
$sql = "INSERT INTO expenses".
 "(date,expense,cost,category,imgpath)".
 "VALUES (' $_POST[date]','$_POST[exp]','$_POST[cost]','$_POST[category]','$file')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: addexp.php?notification=true' );
}
?>
<?php
if($name == "mainpoints")
{


$id=$_GET["ids"];
$team=$_GET["team"];
if ($team=="Web"){
$sql = "INSERT INTO web_design".
 "(id,event)".
 "VALUES ('$id','$team')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: report.php?notification=true' );
}
elseif($team=="Quiz")
{
	$sql = "INSERT INTO quiz".
 "(id,event)".
 "VALUES ('$id','$team')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: report.php?notification=true' );
	
}
elseif($team=="Software")
{
	$sql = "INSERT INTO swmarket".
 "(id,event)".
 "VALUES ('$id','$team')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: report.php?notification=true' );
	
}
elseif($team=="Reverse")
{
	$sql = "INSERT INTO rev_coding".
 "(id,event)".
 "VALUES ('$id','$team')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: report.php?notification=true' );
	
}
  }
?>
<?php
if($name == "college"){

$sql = "INSERT INTO college".
 "(name,add1,add2,city,pin)".
 "VALUES (' $_POST[name]',' $_POST[add1]',' $_POST[add2]',' $_POST[city]',' $_POST[pin]')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: addcolleges.php?notification=true' );
}
?>
<?php
if($name == "test"){
	$cost=$_POST[cost];
	$newbal=0;
	$result = mysqli_query($conn,"SELECT balance FROM budget");
	while($row = mysqli_fetch_array($result))
	{
		$balance=$row['balance'];
		
		
	}
$newbal=$balance-$cost;

$balup= "UPDATE budget SET balance='$newbal' where id=1";
	$retval = mysqli_query($conn,$balup);
$sql = "INSERT INTO expenses".
 "(date,expense,cost)".
 "VALUES (' $_POST[date]','$_POST[exp]','$_POST[cost]')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: addexp.php?notification=true' );
}
?>
<?php
if($name == "question")
{

$sql = "INSERT INTO questions".
 "(id,question,option1,option2,option3,option4,correct,event)".
 "VALUES ('$_POST[qno]','$_POST[quest]','$_POST[option1]','$_POST[option2]','$_POST[option3]','$_POST[option4]','$_POST[right]','$_POST[event1]')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: addquestion.php?notification=true' );
}
?>
<?php
if($name == "team"){
$pos=strpos($_POST[memtxt],",");
$mem=substr($_POST[memtxt],0,$pos);
$pos1=strpos($_POST[memtxt2],",");
$mem1=substr($_POST[memtxt2],0,$pos1);
$sql = "INSERT INTO persons".
"(team,member1,member2,type,username,password)".
"VALUES ('$_POST[teamtxt]',' $mem',' $mem1','$_POST[type]','$_POST[un]','$_POST[pw]')";
	   $retval = mysqli_query($conn,$sql);
	  header( 'Location: teamgen.php?notification=true' );
}
?>