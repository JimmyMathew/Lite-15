<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
</head>

<body>


<script language="javascript">
function submit_name()  {
    document.myform.action = "report.php?notification=false&search=yes";
    document.myform.submit();
}
</script>

<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <table border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
    <tr class=texts>
	<?php 

   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Team data have been deleted successfully</span><br><br>";
}
?>

<form method="post"  name="myform" id="myform">
<?php
echo "<table border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
<tr class=formhead>
<th>ID</th>
<th>Team</th>
<th>Member1</th>
<th>Member2</th>


<th>Prelims</th>
<th>Main Points</th>
<th>Delete</th>

</tr>";
?>
  <?php
$con = mysqli_connect("localhost","root","",'lite');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$q = "select id,event from swmarket";
 $r = mysqli_query($con,$q);

 while($ro = mysqli_fetch_assoc($r))
  {
	  $idc=$ro['id'];
  
$result = mysqli_query($con,"SELECT * FROM persons WHERE id='$idc'");








while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
	 

 $_SESSION['idc'] = $row['id'];
	   $_SESSION['teamn'] = $row['team'];
	  $_SESSION['mem1'] = $row['member1'];
	 $_SESSION['mem2'] = $row['member2'];
 $_SESSION['points'] = $row['points'];

  echo "<tr class='texts'>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['team'] . "</td>";
  echo "<td>" . $row['member1'] . "</td>";
   echo "<td>" . $row['member2'] . "</td>";
  
 echo "<td>" . $row['points'] . "</td>";
  echo "<td><a href=mainpoints.php>Enter</a></td>";
  echo "<td><a href=delete.php?page=sw&ids=".$row['id'].">Delete</a></td>";
  
   echo "</tr>";
  
  }
  }
echo "</table>";
echo "<br>";
mysqli_close($conn);
?>


 
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>

</body>
</html>