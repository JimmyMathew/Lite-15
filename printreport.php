<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
</head>

<body class="mainpage">


<script language="javascript">
function submit_name()  {
    document.myform.action = "printreport.php?notification=false&search=yes";
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

<?php include 'head.php'; ?>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <center><table border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
    <tr class=texts>
	<?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Success</span><br><br>";
}
?>
</table></center>
<form method="post"  name="myform" id="myform">
  <?php
$con = mysqli_connect("localhost","root","",'lite');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

 $query = "select id,type from persons order by Id";
 $result = mysqli_query($conn,$query);
 $selectbox='<center><select name=\'namelist\' onChange="javascript:submit_name();"><option value="">Events</option>';
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
$result = mysqli_query($con,"SELECT * FROM persons WHERE type='$_POST[namelist]'");
}else{
$result = mysqli_query($con,"SELECT * FROM persons");
}
?>
 <form method="post">
 
  <tr><td> <center><input type="button" value="Print" id="button-search" class="button" onclick="PrintDoc()"/></center></td></tr>
  <tr>
  </form>
<div id="printarea">
 <div id="content-input">

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
 
   echo "</tr>";
  }
  }
echo "</table>";
echo "<br>";
mysqli_close($conn);
?>


 


</body>
</html>