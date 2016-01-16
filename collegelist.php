<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lite</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script language="javascript">
/*function submit_name()  {
    document.myform.action = "expense-list.php?notification=false&search=yes";
    document.myform.submit();
}*/
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
print "<span class='notification'>College has been deleted successfully</span><br><br>";
}
?>
    <?php
$con = mysqli_connect("localhost","root","",'lite');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }?>

<?php

$result = mysqli_query($con,"SELECT id,name,add1,add2,city,pin FROM college");
echo "<table border='1' width='50% cellpadding='10' cellspacing='0' class='formborders'>
<tr class=formhead>
<th>College List</th>
<th>Delete</th>";

 
while($row = mysqli_fetch_array($result))
  {
  
 echo "<tr class='college'>";
echo "<td>" . $row['name']."<br>".$row['add1']."<br>".$row['add2']."<br>".$row['city']." - ".$row['pin']."</td>"; 
  echo "<td><a href=delete.php?page=college&ids=".$row['id']."><center>Delete</a></td>";
  echo "</tr>";
  
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