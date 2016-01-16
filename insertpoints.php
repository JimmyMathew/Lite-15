<?php include 'config.php'; ?>
<?php
session_start();
$score = $_GET['points'];
$score1=(string)$score;
$sql = "UPDATE persons SET points='$score1' WHERE id=$_SESSION[id]" ;
$retval = mysqli_query($conn,$sql);
header( 'Location: success.php?notification=true' );


?>
