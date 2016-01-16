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
<br/>
<form method="post">

  <tr><td> <center><input type="button" value="Print" id="button-search" class="button" onclick="PrintDoc()"/></center></td></tr>
  <tr>
  </form>
  

 <div id="printarea">
 <div id="content-input">

 <table border="1" width="300px" align="center" cellpadding="2"  cellspacing="0" >
<tr >
<th>College List</th>
</tr>

    <?php
$con = mysqli_connect("localhost","root","",'lite');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }?>
  <?php

$result = mysqli_query($con,"SELECT id,name,add1,add2,city,pin FROM college");?>

<?php
 
while($row = mysqli_fetch_array($result))
  {
  ?>
<tr>
<td> <?php echo $row['name']."<br>".$row['add1']."<br>".$row['add2']."<br>".$row['city']." - ".$row['pin']."<br>"; ?></td>

 
 <?php
  }?>
</table>


<?php
mysqli_close($con);
?>
       </td>
 
   
  </tr>




</body>
</html>