<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script language="javascript">
function submit_name()  {
    document.myform.action = "printstureport.php?notification=false&search=yes";
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


 <script type='text/javascript' src='http://code.jquery.com/jquery-git.js'></script>
  
  
    
    
      <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
  
        
  
    
      <script type='text/javascript' src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>

</head>

<body class="mainpage">

<?php include 'head.php'; ?>
  
  <tr>
    <td align="center" valign="middle" style="padding-top:20px;" valign="top">
 <center>  <table align "center" border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
   <tr class=texts>
	
 <?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Student data have been deleted successfully</span><br><br>";
}
?>
</table></center>
<br/>
  <?php
$con = mysqli_connect("localhost","root","",'lite');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }?>

  <form method="post"  name="myform" id="myform">
  <?php

$query = "select id,college from registration order by id";
 $result = mysqli_query($conn,$query);


 $selectbox='<center><select name=\'namelist\' onChange="javascript:submit_name();"><option value="">College</option>';
 while ($row = mysqli_fetch_assoc($result)) {

	$selectbox.='<option value="'.$row['college'].'">' . $row['college'] . '</option>';
 
 }
 

 $selectbox.='</select>';
 mysqli_free_result($result);
 echo $selectbox;?>
</form>  <br>
<br>


<?php
if(isset($_GET["search"]))
$name=$_GET["search"];
if($name == "yes"){
$result = mysqli_query($con,"SELECT * FROM registration WHERE college='$_POST[namelist]'");
}else{
$result = mysqli_query($con,"SELECT * FROM registration");
}?>
    <form method="post">
 
  <tr><td> <center><input type="button" value="Print" id="button-search" class="button" onclick="PrintDoc()"/></center></td></tr>
  <tr>
  </form>
<div id="printarea">
 <div id="content-input">

<table border='1' width='100%' id='regis' cellpadding='10' cellspacing='0' class='formborders'>
<tr class=formhead>
<th>ID</th>
<th>Name</th>
<th>College</th>
<th>Email</th>
<th>Mobile</th>
<th>Event1</th>
<th>Event2</th>



</tr>

 
<?php
while($row = mysqli_fetch_array($result))
  {
  
  echo "<tr class='texts'>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
   echo "<td>" . $row['email'] . "</td>";
   echo "<td>" . $row['mobile'] . "</td>";
   echo "<td>" . $row['event1'] . "</td>";
   echo "<td>" . $row['event2'] . "</td>";
  

  echo "</tr>";
  }
  
echo "</table>";

mysqli_close($conn);
?>
    </td>
  </tr>

  <br/>

  


</body>
</html>