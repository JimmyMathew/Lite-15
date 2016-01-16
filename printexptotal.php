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
  </form>
  <div id="printarea">
 <div id="content-input">
 <center>
 <table width="500" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr class=formhead>
        <th><b>Expenses</b></th>
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