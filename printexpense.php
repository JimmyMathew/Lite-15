<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lite</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script language="javascript">
function submit_name()  {
    document.myform.action = "printexpense.php?notification=false&search=yes";
    document.myform.submit();
}
</script>
<script type="text/javascript">

       function PrintDoc() {

        var toPrint = document.getElementById('printarea');

        var popupWin = window.open('', '_blank', 'width=595,height=842,location=no,left=200px');

        popupWin.document.open();

        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')

        popupWin.document.write(toPrint.innerHTML);

        popupWin.document.write('</html>');

        popupWin.document.close();

    }

</script>
</head>

<body class="mainpage">
<?php include 'head.php'; ?>

  <tr>
    <td align="center" valign="middle">
  <center><table border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
    <tr class=texts>
	<?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Expense has been deleted successfully</span><br><br>";
}
?>
</table></center>
<?php $con = mysqli_connect("localhost","root","",'lite');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }?>
<form method="post"  name="myform" id="myform">
    <?php

 $query = "select id,category from expenses order by id";
 $result = mysqli_query($conn,$query);
 $selectbox='<center><select name=\'namelist\' onChange="javascript:submit_name();"><option value="">Category</option>';
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
<form method="post">
 
  <tr><td> <center><input type="button" value="Print" id="button-search" class="button" onclick="PrintDoc()"/></center></td></tr>
  <tr>
  </form>
<div id="printarea">
 <div id="content-input">
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
  

</table>

</body>
</html>