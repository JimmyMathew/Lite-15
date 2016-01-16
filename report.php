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
print "<span class='notification'>Success</span><br><br>";
}
?>

<form method="post"  name="myform" id="myform">
  <?php
$con = mysqli_connect("localhost","root","",'lite');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

 $query = "select id,type from persons order by Id";
 $result = mysqli_query($conn,$query);
 $selectbox='<select name=\'namelist\' onChange="javascript:submit_name();"><option value="">Events</option>';
 while ($row = mysqli_fetch_assoc($result)) {
     if($row['type']!= "Administrator" && $row['type']!= "Registration" && $row['type']!= "Staff" && $row['type']!= "Documentation")
{	

	$selectbox.='<option value="'.$row['type'].'">' . $row['type'] . '</option>';
 
 }
 }
 $selectbox.='</select>';
 mysqli_free_result($result);
 echo "<br>";
 echo $selectbox;?>
<br><br>
</form>



<?php
if(isset($_GET["search"]))
$name=$_GET["search"];
if($name == "yes"){
$result = mysqli_query($con,"SELECT * FROM persons WHERE type='$_POST[namelist]' order by score desc");
}else{
$result = mysqli_query($con,"SELECT * FROM persons order by score desc");
}
?>


<?php
echo "<table border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
<tr class=formhead>
<th>ID</th>
<th>Team</th>
<th>Member1</th>
<th>Member2</th>
<th>Event</th>
<th>Username</th>
<th>Password</th>
<th>Prelims</th>
<th>Main Score</th>
<th>Delete</th>
<th>Select</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
	 



  if($row['type']!= "Administrator" && $row['type']!= "Staff" && $row['type']!= "Registration" && $row['type']!= "Documentation")
  {
  echo "<tr class='texts'>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['team'] . "</td>";
  echo "<td>" . $row['member1'] . "</td>";
   echo "<td>" . $row['member2'] . "</td>";
   echo "<td>" . $row['type'] . "</td>";
   echo "<td>" . $row['username'] . "</td>";
   echo "<td>" . $row['password'] . "</td>";
 echo "<td>" . $row['points'] . "</td>";
  echo "<td>" . $row['score'] . "</td>";
  echo "<td><a href=delete.php?page=report&ids=".$row['id'].">Delete</a></td>";
   echo "<td><a href=insert.php?page=mainpoints&ids=".$row['id']."&team=".$row['type'].">Select</a></td>";
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