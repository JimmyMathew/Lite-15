<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lite</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script language="javascript">
function submit_name()  {
    document.myform.action = "expense-list.php?notification=false&search=yes";
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
print "<span class='notification'>Expense has been deleted successfully</span><br><br>";
}
?>
<?php $con = mysqli_connect("localhost","root","",'lite');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }?>
<form method="post"  name="myform" id="myform">
    <?php

 $query = "select id,category from expenses order by id";
 $result = mysqli_query($conn,$query);
 $selectbox='<select name=\'namelist\' onChange="javascript:submit_name();"><option value="">Category</option>';
 while ($row = mysqli_fetch_assoc($result)) 
 {


	$selectbox.='<option value="'.$row['category'].'">' . $row['category'] . '</option>';
 
 }

 $selectbox.='</select>';
 mysqli_free_result($result);
 echo "<br>";
 echo $selectbox;?>

</form>
<br><br>
<?php $result2 = mysqli_query($con,"SELECT amount,balance FROM budget");
while($bud = mysqli_fetch_array($result2))
{
	echo "<font class='budget'><b>"."Budget : ".$bud['amount']."</font>"."<br>";
	echo "<font class='budget'>"."Balance : ".$bud['balance']."</b></font>";
	echo "<br><br>";
	
}
?>
<?php
if(isset($_GET["search"]))
$name=$_GET["search"];
if($name == "yes"){
$result = mysqli_query($con,"SELECT * FROM expenses WHERE category='$_POST[namelist]'");
}else{
$result = mysqli_query($con,"SELECT * FROM expenses");
}
echo "<table border='1' cellpadding='10' cellspacing='0' class='formborders'>
<tr class=formhead>
<th>id</th>
<th>Date</th>
<th>Expense towards</th>
<th>Cost</th>
<th>Category</th>
<th>Bills</th>
<th>Delete</th>
</tr>";

 
while($row = mysqli_fetch_array($result))
  {
  
 echo "<tr class='texts'>";
echo "<td>" . $row['id'] . "</td>"; 
 echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['expense'] . "</td>";
  echo "<td>" . $row['cost'] . "</td>";
   echo "<td>" . $row['category'] . "</td>";
  echo "<td><img src=employee/". $row['imgpath'] ." width=85 height=85></td>";

  
  echo "<td><a href=delete.php?page=expense&ids=".$row['id'].">Delete</a></td>";
  echo "</tr>";
  
  }
echo "</table>";


?>
<?php

mysqli_close($con);
?>
<?php //$result = mysqli_query($con,"SELECT id,date,expense,cost,category,imgpath FROM expenses");?>

       </td>
  </tr>
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>

</table>

</body>
</html>