<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lite</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
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


    <?php
$con = mysqli_connect("localhost","root","",'lite');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }?>

<?php

$result1 = mysqli_query($con,"SELECT id FROM college");
$row1 =  mysqli_num_rows($result1);
$result2 = mysqli_query($con,"SELECT distinct college FROM registration");
$row2=  mysqli_num_rows($result2);
$students1 = mysqli_query($con,"SELECT id FROM registration");
$stud1 =  mysqli_num_rows($students1);
$students2 = mysqli_query($con,"SELECT id FROM registration where event1='Web Design' or event2='Web Design'");
$stud2 =  mysqli_num_rows($students2);
$students3 = mysqli_query($con,"SELECT id FROM registration where event1='Quiz' or event2='Quiz'");
$stud3 =  mysqli_num_rows($students3);
$students4 = mysqli_query($con,"SELECT id FROM registration where event1='Reverse Coding' or event2='Reverse Coding'");
$stud4 =  mysqli_num_rows($students4);
$students5 = mysqli_query($con,"SELECT id FROM registration where event1='Software Marketing' or event2='Software Marketing'");
$stud5 =  mysqli_num_rows($students5);
$students6 = mysqli_query($con,"SELECT id FROM registration where event1='Gaming' or event2='Gaming'");
$stud6 =  mysqli_num_rows($students6);
$students7 = mysqli_query($con,"SELECT id FROM registration where event1='Paper Presentation' or event2='Paper Presentation'");
$stud7=  mysqli_num_rows($students7);
$students8 = mysqli_query($con,"SELECT id FROM registration where event1='Mobile Application' or event2='Mobile Application'");
$stud8 =  mysqli_num_rows($students8);
$students9 = mysqli_query($con,"SELECT id FROM registration where event1='Stress Interview' or event2='Stress Interview'");
$stud9 =  mysqli_num_rows($students9);
$team1 = mysqli_query($con,"SELECT id FROM persons where type='Web Design' or type='Reverse Coding' or type='Software Marketing' or type='Quiz' or type='Paper Presentation' or type='Mobile Application' or type='Stress Interview' or type='Gaming' " );
$t1 =  mysqli_num_rows($team1);
$team2 = mysqli_query($con,"SELECT id FROM persons where type='Web Design'" );
$t2=  mysqli_num_rows($team2);
$team3 = mysqli_query($con,"SELECT id FROM persons where type='Reverse COding'" );
$t3=  mysqli_num_rows($team3);
$team4 = mysqli_query($con,"SELECT id FROM persons where type='Software Marketing'" );
$t4=  mysqli_num_rows($team4);
$team5 = mysqli_query($con,"SELECT id FROM persons where type='Quiz'" );
$t5=  mysqli_num_rows($team5);
$team6 = mysqli_query($con,"SELECT id FROM persons where type='Paper Presentation'" );
$t6=  mysqli_num_rows($team6);
$team7 = mysqli_query($con,"SELECT id FROM persons where type='Mobile Application'" );
$t7=  mysqli_num_rows($team7);
$team8 = mysqli_query($con,"SELECT id FROM persons where type='Stress Interview'" );
$t8=  mysqli_num_rows($team8);
$team9 = mysqli_query($con,"SELECT id FROM persons where type='Gaming'" );
$t9=  mysqli_num_rows($team9);
$exp1 = mysqli_query($con,"SELECT * FROM budget" );
 while ($e1 = mysqli_fetch_array($exp1)) 
 {
	 $e11=$e1['amount'];
	 $e22=$e1['balance'];
 }
 $exp2 = mysqli_query($con,"SELECT sum(cost) FROM expenses where category='decoration'" );
  while ($e1 = mysqli_fetch_array($exp2)) 
 {
	 $e33=$e1['sum(cost)'];
	 
 }
 $exp3 = mysqli_query($con,"SELECT sum(cost) FROM expenses where category='food'" );
  while ($e1 = mysqli_fetch_array($exp3)) 
 {
	 $e44=$e1['sum(cost)'];
	 
 }
 $exp4 = mysqli_query($con,"SELECT sum(cost) FROM expenses where category='prizes'" );
  while ($e1 = mysqli_fetch_array($exp4)) 
 {
	 $e55=$e1['sum(cost)'];
	 
 }
 $exp5 = mysqli_query($con,"SELECT sum(cost) FROM expenses where category='stationary'" );
  while ($e1 = mysqli_fetch_array($exp5)) 
 {
	 $e66=$e1['sum(cost)'];
	 
 }
 $exp6 = mysqli_query($con,"SELECT sum(cost) FROM expenses where category='printing'" );
  while ($e1 = mysqli_fetch_array($exp6)) 
 {
	 $e77=$e1['sum(cost)'];
	 
 }
?>
<br/>
<form method="post">
 
  <tr><td> <center><input type="button" value="Print" id="button-search" class="button" onclick="PrintDoc()"/></center></td></tr>
  <tr>
  </form>
  <div id="printarea">
 <div id="content-input">
  <table align="center" width="500" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead" ><b>Colleges</b></td>
      </tr>
<?php 

 echo "<td>"."Expected Colleges   : ".$row1."</td>"."<br>";
 echo "<td>"."Registered Colleges : ".$row2."</td>"."<br>";
echo "</table>";
 
  ?>
  <table align="center" width="500" border="0" cellpadding="10" cellspacing="0" class="formborders">

      <tr>
        <td colspan="2" class="formhead"><b>Students</b></td>
      </tr>
<?php 
echo "<tr><td>"."Registered students : ".$t1."</td></tr>"."<br>";
echo "<tr><td>"."Web Designing : ".$stud2."</td></tr>"."<br>";
echo "<tr><td>"."Reverse Coding : ".$stud4."</td></tr>"."<br>";
echo "<tr><td>"."Software Marketing : ".$stud5."</td></tr>"."<br>";
echo "<tr><td>"."Quiz : ".$stud3."</td></tr>"."<br>";

echo "<tr><td>"."Gaming : ".$stud6."</td></tr>"."<br>";
echo "<tr><td>"."Paper Presentation : ".$stud7."</td></tr>"."<br>";
echo "<tr><td>"."Mobile Application : ".$stud8."</td></tr>"."<br>";
echo "<tr><td>"."Stress Interview : ".$stud9."</td></tr>"."<br>";

echo "</table>";



  ?>
   <table align="center" width="500" border="0" cellpadding="10" cellspacing="0" class="formborders">
 <tr>
        <td colspan="2" class="formhead"><b>Teams</b></td>
      </tr>
	  <?php 

echo "<tr><td>"."Total teams : ".$t1."</td></tr>"."<br>";
echo "<tr><td>"."Web Designing : ".$t2."</td></tr>"."<br>";
echo "<tr><td>"."Quiz : ".$t3."</td></tr>"."<br>";
echo "<tr><td>"."Reverse Coding : ".$t4."</td></tr>"."<br>";
echo "<tr><td>"."Software Marketing : ".$t5."</td></tr>"."<br>";
echo "<tr><td>"."Paper Presentation : ".$t6."</td></tr>"."<br>";
echo "<tr><td>"."Mobile Application : ".$t7."</td></tr>"."<br>";
echo "<tr><td>"."Stress Interview : ".$t8."</td></tr>"."<br>";
echo "<tr><td>"."Gaming : ".$t9."</td></tr>"."<br>";

echo "</table>";
?>
 <table align="center" width="500" border="0" cellpadding="10" cellspacing="0" class="formborders">
 <tr>
        <td colspan="2" class="formhead"><b>Expenses</b></td>
      </tr>
<?php

echo "<tr><td>"."Budget Allotted : ".$e11."</td></tr>"."<br>";
 echo "<tr><td>"."Balance  : ".$e22."</td></tr>"."<br>";
echo "<tr><td>"."Food : ".$e44."</td></tr>"."<br>";
echo "<tr><td>"."Decoration : ".$e33."</td></tr>"."<br>";
echo "<tr><td>"."Prizes : ".$e55."</td></tr>"."<br>";
echo "<tr><td>"."Stationary : ".$e66."</td></tr>"."<br>";
echo "<tr><td>"."Printing : ".$e77."</td></tr>"."<br>";
echo "</table>";

mysqli_close($con);
?>
  </div>
  </div>
 
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>



</body>
</html>