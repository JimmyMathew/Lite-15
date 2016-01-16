<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lite</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script language="javascript">
function submit_name()  {
    document.myform.action = "member-list.php?notification=false&search=yes";
    document.myform.submit();
}
</script>
</head>

<body>
<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Member has been deleted successfully</span><br><br>";
}
?>
    <?php
echo"<br><br>";
?>
	
	<?php
$con = mysqli_connect("localhost","root","",'lite');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }?>

<form method="post"  name="myform" id="myform">
<?php
$query = "select id,type from persons order by id";
 $result = mysqli_query($conn,$query);
 $selectbox='<select name=\'namelist\' onChange="javascript:submit_name();"><option value="">Type</option>';
 while ($row = mysqli_fetch_assoc($result)) {
 if($row['type']!= "Web Design" && $row['type']!= "Quiz" && $row['type']!= "Reverse Coding" && $row['type']!= "Software Marketing"){
     $selectbox.='<option value="'.$row['type'].'">' . $row['type'] . '</option>';
 }
 }
 $selectbox.='</select>';
 mysqli_free_result($result);
 echo $selectbox;?>
 </form>
<?php
if(isset($_GET["search"]))
$name=$_GET["search"];
if($name == "yes"){
$result = mysqli_query($con,"SELECT * FROM persons WHERE type='$_POST[namelist]'");
}else{
$result = mysqli_query($con,"SELECT * FROM persons");
}

echo "<table border='1' cellpadding='10' cellspacing='0' class='formborders'>
<tr class=formhead>
<th>id</th>
<th>Name</th>

<th>Type</th>
<th>Username</th>
<th>Password</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  if($row['type']!= "Web Design" && $row['type']!= "Quiz" && $row['type']!= "Reverse Coding" && $row['type']!= "Software Marketing")
{ 
 echo "<tr class='texts'>";
echo "<td>" . $row['id'] . "</td>"; 
 echo "<td>" . $row['team'] . "</td>";
//echo "<td><img src=members/". $row['photo'] ." width=85 height=85></td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td><a href=delete.php?page=member&ids=".$row['id'].">Delete</a></td>";
  echo "</tr>";
  }
  }
echo "</table>";

mysqli_close($con);
?>
       </td>
  </tr>
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>
</body>
</html>