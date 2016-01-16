<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script language="javascript">
function submit_name()  {
    document.myform.action = "stureport.php?notification=false&search=yes";
    document.myform.submit();
}
</script>


 <script type='text/javascript' src='http://code.jquery.com/jquery-git.js'></script>
  
  
    
    
      <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
  
        
  
    
      <script type='text/javascript' src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<script type='text/javascript'>//<![CDATA[ 

/*function demoFromHTML() 
{
    var pdf = new jsPDF('p', 'pt', 'letter');
    // source can be HTML-formatted string, or a reference
    // to an actual DOM element from which the text will be scraped.
    source = $('#test')[0];

    // we support special element handlers. Register them with jQuery-style 
    // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
    // There is no support for any other type of selectors 
    // (class, of compound) at this time.
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"
            return true
        }
    };
    margins = {
        top: 80,
        bottom: 60,
        left: 40,
        width: 522
    };
    // all coords and widths are in jsPDF instance's declared units
    // 'inches' in this case
    pdf.fromHTML(
    source, // HTML string or DOM elem ref.
    margins.left, // x coord
    margins.top, { // y coord
        'width': margins.width, // max width of content on PDF
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {
        // dispose: object with X, Y of the last line add to the PDF 
        //          this allow the insertion of new lines after html
        pdf.save('Test.pdf');
    }, margins);
}
//]]>  */

</script>
</head>

<body>

<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="padding-top:20px;" valign="top">
    <table align "center" border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
    <tr class=texts>
	
 <?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Student data have been deleted successfully</span><br><br>";
}
?>
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


 $selectbox='<select name=\'namelist\' onChange="javascript:submit_name();"><option value="">College</option>';
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
}
echo "<table border='1' width='100%' id='regis' cellpadding='10' cellspacing='0' class='formborders'>
<tr class=formhead>
<th>ID</th>
<th>Name</th>
<th>College</th>
<th>Email</th>
<th>Mobile</th>
<th>Event1</th>
<th>Event2</th>
<th>Delete</th>
</tr>";

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
  echo "<td><a href=delete.php?page=registration&ids=".$row['id'].">Delete</a></td>";
   echo "</tr>";
  }
  
echo "</table>";

mysqli_close($conn);
?>
    </td>
  </tr>
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>

</body>
</html>